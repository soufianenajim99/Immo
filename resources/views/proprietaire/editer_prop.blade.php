<!doctype html>
<html data-theme="cupcake" class="h-full bg-white">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-full">  


  <div class="navbar bg-base-100">
    <div class="navbar-start">
      <div class="dropdown">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
        </div>
      </div>
     
    </div>
    <div class="navbar-center hidden lg:flex">
      <ul class="menu menu-horizontal px-1 mx-2 flex gap-2">
      
       
        <button class="btn btn-outline"><a href="{{route('dashprop')}}">Dashboard</a><button> 
        <button class="btn btn-outline"><a href="/">Home</a></button> 
        <button class="btn btn-outline"><a href="{{route('logout')}}">Log-Out</a></button> 
      </ul>
    </div>
    <div class="navbar-end">
    
    </div>
  </div>





  <form class="max-w-md mx-auto mt-16 p-4 bg-white shadow rounded" action="{{route('bien.update',['bien'=>$bien->id])}}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <h2 class="text-2xl font-bold mb-4">Editer Le Bien</h2>
    <div class="mb-4">
        <label for="name" class="block mb-1">Titre</label>
        <input type="text" id="titre" class="w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" name="titre">
    </div>
    <div class="mb-4">
        <label for="name" class="block mb-1">Adresse</label>
        <input type="text" id="name" class="w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" name="adresse">
    </div>
    <div class="mb-4">
        <label for="name" class="block mb-1">Type</label>
        <select class="select  w-full max-w-xs" name="type">
            <option disabled selected>Type :</option>
            
            <option value="vente">vente</option>
            <option value="location">la location</option>
          </select>
    </div>
    <div class="mb-4">
        <label for="email" class="block mb-1">Picture</label>
        <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="picture"/>
    </div>
    <div class="mb-4">
        <label for="message" class="block mb-1">Description</label>
        <textarea id="message" class="w-full py-2 px-4 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500" name="description"></textarea>
    </div>
    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Submit</button>
</form>

 
   
 


</body>
</html>






















