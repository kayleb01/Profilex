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
           Add a keyword to generate names with.
          </p>
          <form class="mt-8 space-y-6" action="{{route('generate-business-name')}}" method="GET">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Type in a keyword</label>
                <input type="text" id="countries" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"/>
            </div>
            <div>
              <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Generate Name
              </button>
            </div>
          </form>

          @if (session('response'))
            <div class="overflow-auto h-80 w-ful mx-auto bg-white dark:bg-slate-800 dark:highlight-white/5 shadow-lg ring-1 ring-black/5 flex flex-col divide-y dark:divide-slate-200/5 mt-4">
                <div class="p-4">
                    @for ($i = 0; $i < count(session('response')); $i++)
                     <form action="{{route('save-name')}}" method="POST">
                       <div class="flex justify-between border p-4 divider-solid">
                            @csrf
                            <input type="hidden" name="name" value="{{session('response')[$i]}}">
                            <div class="text-slate-900 text-sm font-medium dark:text-slate-200 p-2">{{session('response')[$i]}}</div>
                            <div class="text-slate-500 text-sm font-semibold dark:text-slate-400"><button type="submit" class="border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500  px-3 py-1 ">Save</button></div>
                        </div>
                    </form>
                    @endfor
                </div>
            </div>
          @endif

        </div>
      </div>
    </div>
</div>
@endsection
