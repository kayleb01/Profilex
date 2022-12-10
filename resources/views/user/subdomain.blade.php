@extends('layouts.user')

@section('content')
<div class="container  px-6 mx-auto">

    <h2 class="my-10 text-2xl font-normal text-gray-700 text-center ">
        Subdomain and Path URL
        <span class="float-right"><a href="{{route('user.custom-domain')}}" class="bg-green-500 px-3 pt-3 py-2 text-white font-semibold text-sm">Custom Domain +</a></span>
    </h2>
    <!-- CTA -->
    <div class="flex lg:flex-row space-x-4">
        <div class="flex flex-col justify-center w-1/2">
            <div class=" my-4 py-2 px-4 shadow-md" style="background-color:rgba(3, 168, 158, 0.1) ;">
                Subdomain
            </div>
            <div class=" border py-6 px-4 mt-2 shadow-md">
                <div class="mb-7 ">
                    Subdomain
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="demo@sitewings.com" class=" border border-gray-500 py-1 pl-2 w-full rounded-md bg-gray-100">
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center w-1/2 lg:mt-0 mt-16 ">
            <div class="my-4 py-2 px-4 w-full shadow-md" style="background-color:rgba(3, 168, 158, 0.1) ;">
                Path Based URL
            </div>
            <div class=" border py-6 px-4 mt-2 shadow-md">
                <div class="mb-7 ">
                    URL
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="" class=" border py-1 pl-2 w-full border-gray-500 rounded-md bg-gray-100" value="sitewings.com">
                </div>
            </div>
        </div>

    </div>
    <div class="flex justify-center">
        <button class="bg-green-500 border border-green-600 px-6 py-2 pt-3 text-white mt-10 font-semibold w-full rounded-xl">Save</button>
    </div>
</div>
@endsection
