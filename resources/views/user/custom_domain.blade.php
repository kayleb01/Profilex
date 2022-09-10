@extends('layouts.user')

@section('content')
    <div class="container grid px-6 mx-auto">

        <!-- CTA -->
        <a class="flex items-center justify-around p-4 mt-16 mb-8 border  rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
            href="#">
            <div class="flex items-center">
                <svg class="w-8 h-8 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                    </path>
                </svg>
                <span class="text-xs ml-6">Domain purchased ona free site will be redirected to
                    site.sitewing.com, If you upgrade to the pro plan you can use ur own domain</span>
            </div>
            <span class=" text-xs border p-2 rounded-lg lg:ml-0 ml-6 ">Upgrade </span>
        </a>
        <div class=" flex flex-col text-center justify-center items-center">
            <div class="text-blue-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="lg:w-32 w-20 lg:h-32 h-20 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                </svg>

            </div>
            <h3 class=" font-normal lg:text-4xl text-xl">Connect Your Custom Domain Now</h3>
            <p class="font-normal lg:text-sm text-sm my-8">You can connect your custom domain and use SiteWings Without Restrictions.</p>
            <button class="lg:my-5 my-1 py-3 px-6 text-white rounded-full lg:text-sm text-xs" style="background-color: rgba(33, 150, 83, 0.95);">UPGRADE NOW</button>
        </div>
@endsection
