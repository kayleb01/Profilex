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
        return view('user.qrcode.index');
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
            // else {
            //     if (!empty($bs->qr_inserted_image) && file_exists('./' . $directory . $bs->qr_inserted_image)) {
            //         $qr = Image::make($directory . $qrImage);
            //         $logo = Image::make($directory . $bs->qr_inserted_image);
            //         $logo->resize(null, $insertedImgSize, function ($constraint) {
            //             $constraint->aspectRatio();
            //         });

            //         $logoWidth = $logo->width();
            //         $logoHeight = $logo->height();

            //         $qr->insert($logo, 'top-left', (int) (((($qrSize - $logoWidth) * $request->image_x) / 100)), (int) (((($qrSize - $logoHeight) * $request->image_y) / 100)));

            //         $qr->save($directory . $qrImage);
            //     }
            // }
        }

        if ($type == 'text') {
            $imageSize = $request->text_size;
            $insertedImgSize = ($qrSize * $imageSize) / 100;

            $logo = Image::canvas($request->text_width, $insertedImgSize, "#ffffff")->text($request->text, 0, 0, function ($font) use ($request, $insertedImgSize) {
                $font->file(public_path('../../assets/fonts/Lato-Regular.ttf'));
                $font->size($insertedImgSize);
                $font->color('#' . $request->text_color);
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


        $bs->qr_color = $request->color;
        $bs->qr_size = $request->size;
        $bs->qr_style = $request->style;
        $bs->qr_eye_style = $request->eye_style;
        $bs->qr_image = $qrImage;
        $bs->qr_type = $type;

        if ($type == 'image') {
            if ($request->hasFile('image')) {
                $bs->qr_inserted_image = $mergedImage;
            }
            $bs->qr_inserted_image_size = $imageSize;
            $bs->qr_inserted_image_x = $request->image_x;
            $bs->qr_inserted_image_y = $request->image_y;
        }

        if ($type == 'text' && !empty($request->text)) {
            $bs->qr_text = $request->text;
            $bs->qr_text_color = $request->text_color;
            $bs->qr_text_size = $request->text_size;
            $bs->qr_text_x = $request->text_x;
            $bs->qr_text_y = $request->text_y;
        }

        $bs->qr_margin = $request->margin;
        $bs->qr_url = $request->url;
        $bs->save();

        return url($directory . $qrImage);
    }

    public function save(Request $request)
    {
        $rules = [
            'name' => 'required|max:255'
        ];

        $request->validate($rules);

        // $bs = Setting::where('user_id', Auth::user()->id)->first();

        $qrcode = new QrCode();
        $qrcode->user_id = Auth::user()->id;
        $qrcode->name = $request->name;
        $qrcode->image = $bs->qr_image;
        $qrcode->url = $bs->qr_url;
        $qrcode->save();

        // $this->clearFilters($bs);

        \Session::flash('success', 'QR Code saved successfully!');
        return back();
    }

    public function clearFilters($bs, $type = null)
    {
        @unlink('assets/front/img/user/qr/' . $bs->qr_inserted_image);
        if ($type == 'clear') {
            @unlink('assets/front/img/user/qr/' . $bs->qr_image);
        }

        $bs->qr_image = null;
        $bs->qr_color = '000000';
        $bs->qr_size = 250;
        $bs->qr_style = 'square';
        $bs->qr_eye_style = 'square';
        $bs->qr_margin = 0;
        $bs->qr_text = null;
        $bs->qr_text_color = '000000';
        $bs->qr_text_size = 15;
        $bs->qr_text_x = 50;
        $bs->qr_text_y = 50;
        $bs->qr_inserted_image = null;
        $bs->qr_inserted_image_size = 20;
        $bs->qr_inserted_image_x = 50;
        $bs->qr_inserted_image_y = 50;
        $bs->qr_type = 'default';
        $bs->qr_url = null;
        $bs->save();
    }
}
