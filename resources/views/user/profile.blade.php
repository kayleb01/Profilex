@extends('layouts.user')
@section('content')
<div class="container px-6 mx-auto grid">
    <h2
      class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
    >
      Edit Profile
    </h2>
    @include('partials.error-success')

      <div class="flex flex-row w-full">
        <div class="flex flex-col w-1/4 h-32 mr-4">
          <button class="md:px-10 px-5 py-2 my-6 text-sm font-medium leading-5 text-black  border border-transparent rounded " style="background-color: #EAF8F5;">Edit Profile</button>
          <button class="px-10  py-2 text-sm font-medium leading-5 text-black border border-transparent rounded " style="background-color: #EAF8F5;">Change Password</button>
        </div>

        <div class="h-32 mt-6">
            <form action="{{route('profile.edit')}}" method="POST">
                @csrf
                <div class="m-4">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Full Name</span>
                    </label>
                    <input
                      class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md pt-2 pb-1 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                      placeholder="Jane Doe"
                      name="fullname"
                      value="{{$user->fullname}}"
                    />
                </div>
                <div class="m-4">
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Country</span>
                    </label>

                    <input
                      class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border border-slate-300 rounded-md pt-2 pb-1 pl-2 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm"
                      placeholder="Country"
                      name="country"
                      value="{{$user->country}}"
                    />
                </div>

                <div class="m-4">
                  <button class="w-full md:px-10 mt-2  py-2 text-sm font-medium leading-5 text-black border  shadow-md rounded" style="background-color: #EAF8F5;" type="submit">Submit</button>
                </div>
            </form>

        </div>
        <!-- General elements -->
      </div>

  </div>
@endsection
