@extends('layouts.user')

@section('content')
<div class=" py-6 flex flex-col justify-center sm:py-12 bg-white">
  <div class=" flex flex-row justify-between px-10 mb-10 text-lg text-semibold text-center " >
    <div class="px-10 py-4  " style="background-color:rgba(3, 168, 158, 1) ;">Templates</div>
    <div class=" ">Select a template to get started!
    </div>
  </div>
  <section class="   ">
      <div style='' class="container flex flex-row  justify-center w-full space-x-4" x-data="{tab: 1}">
          <div class="flex flex-col justify-start  w-full space-y-4 text-xl" style="background-color: rgba(52, 147, 141, 0.1);">
            <div class=" py-3 text-center text-white" style="background-color:rgba(3, 168, 158, 1) ;">Select your niche</div>
              <a class="px-2 py-2 text-md" :class="{'  bg-green-200 font-bold': tab === 1, ' font-semibold': tab !== 1} " href="#" @click.prevent="tab = 1">
                <i class="fas fa-comment-dollar"></i> Make money online
              </a>
              <a class="px-4 py-2 text-md" :class="{'  bg-green-200 font-bold': tab === 2, ' font-semibold': tab !== 2} " href="#" @click.prevent="tab = 2" @click.prevent="tab = 2">
                <i class="fas fa-briefcase-medical"></i> Health
              </a>
              <a class="px-4 py-2 text-md" :class="{'  bg-green-200 font-bold': tab === 3, ' font-semibold ': tab !== 3} " href="#" @click.prevent="tab = 3" @click.prevent="tab = 3">
                <i class="fas fa-dumbbell"></i> Fitness
              </a>
              <a class="px-4 py-2 text-md" :class="{'  bg-green-200 font-bold': tab === 4, ' font-semibold ': tab !== 4} " href="#" @click.prevent="tab = 4" @click.prevent="tab = 4">
                <i class="fas fa-weight"></i> Weight loss
              </a>
              <a class="px-4 py-2 text-md" :class="{'  bg-green-200 font-bold': tab === 5, ' font-semibold': tab !== 5} " href="#" @click.prevent="tab = 5" @click.prevent="tab = 5">
                <i class="fas fa-home"></i> Gardens and homes
              </a>
          </div>
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
      </div>
  </section>
</div>
@endsection
