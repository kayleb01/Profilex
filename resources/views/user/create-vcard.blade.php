@extends('layouts.user')
@section('content')
<div class="container grid px-6 mx-auto">
    <div class="p-4 mt-14 border-gray-400">
        <a href="#" class="p-2 bg-green-500 pt-4 text-white" onclick="history.back()"><i class="fa fa-arrow-circle-left"></i> Go back</a>
        <div class="w-full mx-auto border p-4 m-4">
            <h3 class="font-bold font-sans m-4">Create VCard</h3>
           <form action="#" method="post">
            <div class="w-full flex flex-col lg:flex-row lg:space-y-4 ">
                <div class="m-4 w-1/2">
                    <label for="vcard_name" class="font-semibold">VCard Name</label>
                    <input type="text" name="vcard_name" id="vcard_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-4 w-1/2">
                    <label for="direction" class="font-semibold">Direction</label>
                    <input type="text" name="direction" id="direction" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>

            <div class="w-full flex flex-col lg:flex-row lg:space-y-4 ">
                <div class="m-4 w-1/2">
                    <label for="name" class="font-semibold">Name</label>
                    <input type="text" name="name" id="name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-4 w-1/2">
                    <label for="company_name" class="font-semibold">Company Name</label>
                    <input type="text" name="company_name" id="company_name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>

            <div class="w-full flex flex-col lg:flex-row lg:space-y-4 ">
                <div class="m-4 w-1/2">
                    <label for="vcard_name" class="font-semibold">Occupation</label>
                    <input type="text" name="occupation" id="occupation" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-4 w-1/2">
                    <label for="email" class="font-semibold">Email</label>
                    <input type="text" name="email" id="email" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>

            <div class="w-full flex flex-col lg:flex-row lg:space-y-4 ">
                <div class="m-4 w-1/2">
                    <label for="phone_number" class="font-semibold">Phone Number</label>
                    <input type="text" name="phone_number" id="phone_number" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="m-4 w-1/2">
                    <label for="address" class="font-semibold">Address</label>
                    <input type="text" name="address" id="address" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="w-full flex justify-center">
                <div class="m-4 w-full">
                    <label for="website_url" class="font-semibold">Website Url</label>
                    <input type="text" name="website_url" id="website_url" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>
            <div class="w-full flex justify-center">
                <div class="m-4 w-full">
                    <label for="website_url" class="font-semibold">Bio</label>
                    <textarea name="bio" id="bio" rows="6" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                </div>
            </div>
            <div class="flex justify-center">
                <button type="submit" class="bg-green-500 px-6 pt-4 py-2 border border-green-600 font-semibold text-white rounded-xl w-1/2 hover:bg-green-600">Submit</button>
            </div>
           </form>
        </div>
    </div>
</div>
@endsection
