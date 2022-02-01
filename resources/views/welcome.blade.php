<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex flex-col items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-12">
            <form action="/save" method="post" enctype="multipart/form-data" class="w-1/2 mx-auto">
                <input type="file" name="photo" id="photo" class="px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                @csrf
                <button type="submit" class="bg-gray-300 py-2 px-4 rounded">Upload</button>
            </form>
            <div class="gallery mt-12 text-center w-1/2 mx-auto">
                <h2 class="text-2xl font-bold mb-2">Photo Gallery</h2>
                <div class="row flex items-top justify-center -mx-3">
                    @foreach($photos as $photo)
                        <div class="image w-1/3 mx-3">
                            <img src="/storage/{{ $photo }}">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
