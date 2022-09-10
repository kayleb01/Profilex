@extends('layouts.user')

@section('content')
<div class="container grid px-6 mx-auto">
    <h2 class="my-10 text-center text-2xl font-normal text-gray-700 ">
        Intelligent SEO Wiz
    </h2>
    <!-- CTA -->
    <div class="grid lg:grid-cols-2  grid-cols-1 mb-4">
        <div class=" grid justify-center   ">

            <div class=" border py-6 px-6 mt-2 ">
                <div class="mb-7 ">
                    Meta Keywords For Home Page
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="Enter Meta Keywords" class=" border py-1 pl-2">
                </div>
            </div>
        </div>
        <div class=" grid justify-center lg:mt-0 mt-16  ">

            <div class=" border py-6 px-6 mt-2 ">
                <div class="mb-7 ">
                Meta Keywords For Blogs Page
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="Enter Meta Keywords" class=" border py-1 pl-2">
                </div>
            </div>
        </div>
    </div>
    <div class="grid lg:grid-cols-2  grid-cols-1">
        <div class=" grid justify-center   ">

            <div class=" border py-6 px-4 mt-2 ">
                <div class="mb-7 ">
                    Meta Description For Home Page
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="Enter Meta Description" class=" border py-1 pl-2">
                </div>
            </div>
        </div>
        <div class=" grid justify-center lg:mt-0 mt-16  ">

            <div class=" border py-6 px-4 mt-2 ">
                <div class="mb-7 ">
                    Meta Description For Blogs Page
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="Enter Meta Description" class=" border py-1 pl-2">
                </div>
            </div>
        </div>
    </div>
    <button class="lg:my-7 my-10 py-3 px-6 text-white rounded-full lg:text-sm text-lg mx-24" style="background-color: rgba(33, 150, 83, 0.95);">SAVE</button>
@endsection
