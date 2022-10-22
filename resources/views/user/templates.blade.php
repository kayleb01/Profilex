@extends('layouts.user')

@section('content')
<div class=" py-6 flex flex-col justify-center sm:py-12 bg-white">
  <div class=" flex flex-row justify-between px-10 mb-10 text-lg text-semibold text-center " >
    {{-- <a  href="{{route('user.pages-add')}}" class="px-10 py-4 font-semibold text-white" style="background-color:rgba(3, 168, 158, 1) ;">  Add Page</a> --}}
    <div class=" ">Select a template to get started!
    </div>
  </div>
  <section class="">
      <div class="w-1/2 mx-auto">
        <form class="mt-8 space-y-6" action="{{route('generate-business-name')}}" method="GET">
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
                <label for="countries" class="block mb-2 text-lg font-semibold text-gray-900 dark:text-gray-400">SELECT A NICHE</label>
                <select name="niche" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block pt-4 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" disabled selected>Select a niche</option>
                    <option value="real_estate">Real Estate</option>
                    <option value="aitbnb">Airbnb</option>
                    <option value="ecommerce">eCommerce</option>
                    <option value="spas">Spas</option>
                    <option value="restaurant">Restaurants</option>
                    <option value="daycare">Daycares</option>
                    <option value="cooperate">Cooperate</option>
                    <option value="old_age_homes">Old Age Homes</option>
                </select>
            </div>
            <div>
              {{-- <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Generate Name
              </button> --}}
            </div>
          </form>
      </div>
      @if (session('response'))
            <div class="overflow-auto w-2/3 mx-auto bg-white dark:bg-slate-800 dark:highlight-white/5 shadow-lg ring-1 ring-black/5 flex flex-col divide-y dark:divide-slate-200/5 mt-4">
                <div class="p-4">
                    <div class=" ">
                        <div class=" grid grid-cols-3 gap-6 w-full" x-show="tab === 1">
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ;">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                        </div>

                        <div class=" grid grid-cols-3 gap-6 w-full  " x-show="tab === 2">
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                        </div>

                        <div class=" grid grid-cols-3 gap-6 w-full  " x-show="tab === 3">
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                        </div>

                        <div class=" grid grid-cols-3 gap-6 w-full  " x-show="tab === 4">
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                        </div>

                        <div class=" grid grid-cols-3 gap-6 w-full  " x-show="tab === 5">
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                          <div class="  overflow-hidden rounded-lg bg-white  shadow-md ">
                            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">

                            <div class=" flex py-4 justify-around text-center">
                              <button class=" border border-green-900 rounded-md  px-4 py-2 font-semibold text-green-900 shadow-md duration-75 ">Select</button>
                              <button class=" rounded-md bg-green-900 px-3 py-2 font-semibold text-white shadow-md duration-75 " style="background-color:rgba(3, 168, 158, 1) ">Customize</button>
                            </div>
                          </div>
                        </div>
                    </div>
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
  </section>
</div>
@endsection
