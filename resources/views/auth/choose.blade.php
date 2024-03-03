<!doctype html>
<html data-theme="cupcake" class="h-full bg-white">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
      
        <div class="w-1/2 flex justify-center items-center bg-white">
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h2 class="text-xl font-bold mb-4">Register as a Proprietaire</h2>
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md"><a href="{{route('register')}}">Register</a></button>
            </div>
        </div>
      
        <div class="w-1/2 flex justify-center items-center bg-gray-800 text-white">
            <div class="border border-gray-700 p-6 rounded-lg text-center">
                <h2 class="text-xl font-bold mb-4">Register as a Client</h2>
               
                <button class="bg-green-500 text-white px-4 py-2 rounded-md"><a href="{{route('registercl')}}">Register</a></button>
            </div>
        </div>
    </div>
</body>
</html>