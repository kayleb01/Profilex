@extends('layouts.user')

@section('content')
<div class="container grid px-6 mx-auto">
    <h2 class="my-10 text-2xl font-normal text-gray-700 text-center ">
        Subdomain and Path URL
    </h2>
    <!-- CTA -->
    <div class="grid lg:grid-cols-2  grid-cols-1">
        <div class=" grid justify-center   ">
            <div class=" my-4 py-2 px-4 shadow-lg shadow-gray-500/50  " style="background-color:rgba(3, 168, 158, 0.1) ;">
                Subdomain
            </div>
            <div class=" border py-6 px-4 mt-2 shadow-lg shadow-gray-500/50">
                <div class="mb-7 ">
                    Subdomain
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="demo@sitewings.com" class=" border py-1 pl-2">
                </div>
            </div>
        </div>
        <div class=" grid justify-center lg:mt-0 mt-16  ">
            <div class=" my-4 py-2 px-4  shadow-lg shadow-gray-500/50" style="background-color:rgba(3, 168, 158, 0.1) ;">
                Path Based URL
            </div>
            <div class=" border py-6 px-4 mt-2 shadow-lg shadow-gray-500/50">
                <div class="mb-7 ">
                    URL
                </div>
                <div class=" mt-4 ">
                    <input type="text" placeholder="profilo.xyz/Romario" class=" border py-1 pl-2">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
