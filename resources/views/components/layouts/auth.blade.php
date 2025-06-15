<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="h-screen p-5">
    <div class="flex h-full">
        <div class="w-3/5 bg-primary-5% rounded-3xl p-20 pr-0">
            <div class="h-full w-full bg-transparent">
                <img src="{{ asset('assets/images/auth/side-left.png') }}" alt="" class="h-full w-full object-cover object-top rounded-bl-4xl rounded-tl-4xl">
            </div>
        </div>
        <div class="w-2/5 flex flex-col justify-center items-center">
            {{ $slot }}
        </div>
    </div>
</body>
</html>