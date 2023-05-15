<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Folio</title>
    @vite('resources/css/app.css')
</head>
<body>
    <nav class="fixed w-full h-fit bg-transparent py-4 z-20">
        <div class="container mx-auto px-2">
            <a href="#"><h2 class="orange_gradient font-bold text-4xl"><span class="text-5xl">S</span>tudent<span class="text-5xl">F</span>olio</h2></a>

            <p class="text-white font-medium text-lg">Online Transcript and Internship</p>
        </div>
    </nav>

    {{ $slot }}
</body>
</html>