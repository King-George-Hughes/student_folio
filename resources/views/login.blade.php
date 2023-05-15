<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="w-full min-h-screen flex items-center justify-center">
        <div class="max-w-[400px] bg-gradient-to-br from-gray-100 to-gray-300 mx-2 p-5 rounded-md shadow-md">
            <form action="" class="w-full">
                <h1 class="orange_gradient text-3xl font-bold mb-3 text-center">LOGIN</h1>

                <label class="text-lg font-medium text-gray-600" for="email">Email</label>
                <input type="email" id="email" class="w-full h-[45px] rounded-md outline-none px-3 mb-3">

                <label class="text-lg font-medium text-gray-600" for="password">Password</label>
                <input type="password" id="password" class="w-full h-[45px] rounded-md outline-none px-3 mb-3">

                <button class="orange_gradient_bg text-white w-full my-3 p-3 rounded-xl text-xl">Login</button>
            </form>

            <h4 class="mt-3">Don't have an account? <a href="/register" class="text-orange-600">Register here.</a></h4>
        </div>
    </div>
</body>
</html>