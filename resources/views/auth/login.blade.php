<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitewings | Login</title>
    <meta name="author" content="Ubong Ndoh ">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>

<body class="bg-white font-family-karla h-screen">

    <div class="w-full  flex flex-wrap">

        <!-- Login Section -->
        <div class="w-full md:w-1/2 flex flex-col h-screen text-white " style="background-color: #03A89E;">

            <div class="flex justify-center items-center  pt-8 sm:-mb-24 ">
                <!-- <a href="#" class="bg-black text-white  font-bold text-xl p-4">Logo</a> -->

                <img src="{{ asset('assets/images/logo.png') }}" class=" h-24 w-38" alt="logo">
            </div>

            <div class="flex flex-col justify-center md:justify-start my-auto -pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Log In.</p>
                @include('partials.error-success')
                <form class="flex flex-col pt-3 md:pt-8" method="POST" method="{{route('login')}}">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="email" class="text-lg">Email</label>
                        <input type="email" name="email" id="email" placeholder="your@email.com"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('email') border border-red-500 @enderror"
                            >
                    </div>

                    <div class="flex flex-col pt-4">
                        <label for="password" class="text-lg">Password</label>
                        <input type="password" id="password" name="password" placeholder="Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('password') border border-red-500 @enderror"

                            >
                    </div>

                    <input type="submit" value="Log In"
                        class=" text-white font-bold text-lg hover:bg-gray-700 p-2 mt-8"
                        style="background-color: #37DCD2;">
                </form>
                <div class="text-center pt-12 pb-12">
                    <p>Don't have an account? <a href="{{ route('register') }}" class="underline font-semibold">Register here.</a></p>
                    <p><a href="{{route('password.forgot')}}" class="font-semibold"> Forgot your password?</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2  lg:h-screen shadow-2xl  flex justify-center items-center">
            <img class=" w-90 h-80 hidden md:block" src="{{ asset('assets/images/Group.png') }}">
        </div>
    </div>

</body>

</html>
