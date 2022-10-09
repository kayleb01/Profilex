<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenerateQrRequest;
use App\Models\Qrcode;
use Illuminate\Http\Request;
use Image;

class QrCodeController extends Controller
{
    public function index()
    {
        $qrcodes = Qrcode::where('user_id', auth()->id())->paginate(30);
        return view('user.qrcode.index', [
            'qrcodes' => $qrcodes
        ]);
    }

    public function generate()
    {
        $qrcode = Qrcode::where('user_id', auth()->id())->first();
        return view('user.qrcode.generate_qrcode', ['qrcode' => $qrcode]);
    }

    public function generateQrcode(Request $request)
    {
        // dd($request);
        if (!$request->filled('url')) {
            return "url_empty";
        }

        $img = $request->file('image');
        $type = $request->type;

        $color = hex2rgb($request->color);

        $directory = 'assets/images/qr/';
        @mkdir($directory, 0775, true);
        $qrImage = uniqid() . '.png';

        // new QR code init
        $qrcode = \QrCode::size($request->size)->errorCorrection('H')->margin($request->margin)
            ->color($color['red'], $color['green'], $color['blue'])
            ->format('png')
            ->style($request->style)
            ->eye($request->eye_style);

        if ($type == 'image' && $request->hasFile('image')) {
            $mergedImage = uniqid() . '.' . $img->getClientOriginalExtension();
            $img->move($directory, $mergedImage);
        }

        // generating & saving the qr code in folder
        $qrcode->generate($request->url, $directory . $qrImage);

        $qrSize = $request->size;


        if ($type == 'image') {
            $imageSize = $request->image_size;
            $insertedImgSize = ($qrSize * $imageSize) / 100;

            // inserting image using Image Intervention & saving the qr code in folder
            if ($request->hasFile('image')) {
                $qr = Image::make($directory . $qrImage);
                $logo = Image::make($directory . $mergedImage);
                $logo->resize(null, $insertedImgSize, function ($constraint) {
                    $constraint->aspectRatio();
                });

                $logoWidth = $logo->width();
                $logoHeight = $logo->height();

                $qr->insert($logo, 'top-left', (int) (((($qrSize - $logoWidth) * $request->image_x) / 100)), (int) (((($qrSize - $logoHeight) * $request->image_y) / 100)));
                $qr->save($directory . $qrImage);
            }
        }

        if ($type == 'text') {
            $imageSize = $request->text_size;
            $insertedImgSize = ($qrSize * $imageSize) / 100;
            $logo = Image::canvas($request->text_width, $insertedImgSize, "#ffffff")->text($request->text, 0, 0, function ($font) use ($request, $insertedImgSize) {
                $font->file(public_path('assets/fonts/Lato-Regular.ttf'));
                $font->size($insertedImgSize);
                $font->color($request->text_color);
                $font->align('left');
                $font->valign('top');
            });

            $logoWidth = $logo->width();
            $logoHeight = $logo->height();

            $qr = Image::make($directory . $qrImage);

            // use callback to define details
            $qr->insert($logo, 'top-left', (int) (((($qrSize - $logoWidth) * $request->text_x) / 100)), (int) (((($qrSize - $logoHeight) * $request->text_y) / 100)));
            $qr->save($directory . $qrImage);
        }

        return url($directory . $qrImage);
    }

    public function save(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'qr_url' => 'required|string'
        ];

        $request->validate($rules);

        $qrcode = new QrCode();
        $qrcode->user_id = auth()->id();
        $qrcode->image = $request->name;
        $qrcode->url = $request->qr_url;
        $qrcode->save();

        \Session::flash('success', 'QR Code saved successfully!');
        return back();
    }

    public function delete($id)
    {
        $qrcode = QrCode::where('user_id', auth()->id())->where('id', $id)->firstOrFail();
        @unlink($qrcode->image);
        $qrcode->delete();

        return redirect()->back()->with('success', 'QR Code deleted successfully!');
    }
}
