<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveBusinessName;
use App\Models\BusinessName;
use Http;
use Illuminate\Http\Request;

class BusinessNameController extends Controller
{
    public function index()
    {
        $businessNames = BusinessName::query()
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('user.business-name', [
            'businessNames' => $businessNames
        ]);
    }

    public function createBusinessName()
    {
        return view('user.create-business-name');
    }

    public function generateName(Request $request)
    {
        $response = Http::withHeaders(
            [
            'X-RapidAPI-Key' => 'ba8c619fabmshcc42ed9c457fab6p15e1bejsn257604f0cb43',
            'X-RapidAPI-Host' => 'business-name-generator.p.rapidapi.com'
        ]
        )->get(config('app.business_name_api'), [
            'q' => $request->name
        ]);

        return back()->with(['response' => $response->json()]);
    }

    public function store(SaveBusinessName $request)
    {
        $businessName = new BusinessName();
        $businessName->name = $request->validated()['name'];
        $businessName->user_id = auth()->id();
        $businessName->save();

        return redirect()->route('business-name')->with('success', 'Business name saved successfully');
    }

    public function destroy(BusinessName $business)
    {
        $business->delete();
        return back()->with('success', 'Business name deleted successfully');
    }
}
