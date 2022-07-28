<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SiteWings | Register</title>
    <meta name="author" content="Site wings">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>
</head>

<body class="bg-white font-family-karla h-screen">

    <div class="w-full flex flex-wrap h-screen">

        <!-- Register Section -->
        <div class="w-full md:w-1/2 flex flex-col text-white" style="background-color: #03A89E;">

            <div class="flex justify-center item-center pt-8 pb-4 ">
                <!-- <a href="#" class="bg-black text-white font-bold text-xl p-4" alt="Logo">Logo</a> -->
                <img src="{{ asset('assets/images/logo.png') }}" class="h-24 w-38" alt="logo">
            </div>
            <div class="flex flex-col justify-center md:justify-start my-auto pt-8 md:pt-0 px-8 md:px-24 lg:px-32">
                <p class="text-center text-3xl">Registration.</p>
                @include('partials.error-success')
                <form class="flex flex-col pt-3 md:pt-8" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-col pt-4">
                        <label for="name" class="text-lg">Name</label>
                        <input name="fullname" type="text" id="name" placeholder="John Smith"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline @error('fullname') border border-red-500 @enderror"
                            required
                            />
                    </div>

                    <div class="flex flex-col pt-2">
                        <label for="email" class="text-lg">Email</label>
                        <input name="email" type="email" id="email" placeholder="your@email.com"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline  @error('email') border border-red-500 @enderror"
                            required
                            />
                    </div>
                    <div class="flex flex-col pt-2">
                        <label for="email" class="text-lg">Country</label>
                        <input name="country" type="text" id="country" placeholder="Nigeria"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline  @error('country') border border-red-500 @enderror"
                            required
                            />
                    </div>

                    <div class="flex flex-col pt-2">
                        <label for="password" class="text-lg">Password</label>
                        <input name="password" type="password" id="password" placeholder="Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline  @error('password') border border-red-500 @enderror"
                            required
                            />
                    </div>

                    <div class="flex flex-col pt-2">
                        <label for="confirm-password" class="text-lg">Confirm Password</label>
                        <input name="password_confirmation" type="password" id="confirm-password" placeholder="Password"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mt-1 leading-tight focus:outline-none focus:shadow-outline  @error('password_confirmation') border border-red-500 @enderror"
                            required
                            />
                    </div>

                    <input type="submit" value="Register" class=" text-white font-bold text-lg  p-2 mt-8"
                        style="background-color: #37DCD2;" />
                </form>
                <div class="text-center pt-8 pb-8">
                    <p>Already have an account? <a href="{{ route('login') }}" class="underline font-semibold">Log in
                            here.</a></p>
                </div>
            </div>

        </div>

        <!-- Image Section -->
        <div class="w-1/2  lg:h-screen   flex justify-center items-center">
            <img class=" w-90 h-80 hidden md:block" src="{{ asset('assets/images/Group.png') }}">
        </div>
    </div>

</body>

</html>
