@extends('layouts.user')
@section('content')
<div class="container grid px-6 mx-auto">
    <div class="p-4 mt-14 border-gray-400 bg-green-200 rounded-2xl">
        <div class="max-w-xl mx-auto">
          <h2
            class="text-xl text-left inline-block font-semibold text-gray-800"
          >
            Search for business name
          </h2>
          <p class="text-gray-700 text-xs pl-px">
            Select the category you want to generate names for.
          </p>
          <form class="mt-8 space-y-6" action="#" method="POST">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Select an category</label>
                <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option selected>Choose a category</option>
                  <option value="">Agriculture</option>
                  <option value="">Information Technology</option>
                  <option value="">Medicine</option>
                </select>
            </div>

            <div>
              <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Generate Name
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
