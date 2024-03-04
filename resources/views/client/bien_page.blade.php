<!doctype html>
<html data-theme="cupcake">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="bg-base-200">
  
    <div class="container mx-auto relative">
        <div class="flex items-center justify-center">
            <nav class=" mt-28 w-5/6 fixed z-50">
                <div class="navbar bg-base-300 rounded-3xl ">
                    <div class="flex-1">
                      <a class="btn btn-ghost text-xl">Agency</a>
                    </div>
                    <div class="flex-none gap-2">
                      <div class="form-control">
                        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
                      </div>
                      <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                          <div class="w-10 rounded-full">
                            @if (Auth::check())
                            <img alt="" src="/images/users/{{Auth::user()->picture}}" />    
                            @else
                            <img alt="" src="/images/download.png" />    
                                
                            @endif
                          </div>
                        </div>
                          <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                 @if (Auth::check())
                 @if (Auth::user()->hasRole('prop'))
                 <li><a href="{{route('dashprop')}}">Dashboard</a></li>
                 <li><a href="{{route('logout')}}">Logout</a></li>
                 @else
                 <li><a href="{{route('logout')}}">Logout</a></li>
                 @endif
                     
                 @else
                 <li><a href="{{route('choose')}}">Register</a></li>
                 <li><a href="{{route('login')}}">Login</a></li>
                 @endif                       
                        </ul>
                      </div>
                    </div>
                </div>
            </nav>
        </div>
       

        <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16 h-screen">
  
 
  
  
    
            <div class="container mx-auto p-6 ">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    
          
                    <h1 class="text-2xl font-bold mb-4">
                        {{
                            $bien['titre']
                           }}
                    </h1>
                    
                    <img class="max-w-sm mx-auto my-4 rounded-lg shadow" src="{{ asset($bien['image']) }}" alt="Chocolate Cake" class="mb-4 rounded-lg shadow-md">
                 
                    <h2 class="text-xl font-semibold mb-2">Description</h2>
                    <p class="text-gray-900 mb-4 break-words">{{
                        $bien['description']
                       }}</p>
                    <h2 class="text-xl font-semibold mb-2">Adresse</h2>
                    <p class="text-gray-900 mb-4 break-words">{{
                        $bien['adresse']
                       }}</p>
                    <h2 class="text-xl font-semibold mb-2">Type</h2>
                    <p class="text-gray-900 mb-4 break-words">{{
                        $bien['type']
                       }}</p>
         <p class="text-gray-700 text-xs mt-4">created_at</p>
         <p class="text-gray-700 text-sm ">{{$bien['created_at']->diffForHumans()}}</p>
        
                    <div class="text-center flex justify-center gap-2">
                        
                       
                            @if ($bien['client_id'] == null)
                            <a href="/reserve_page/{{$bien['id']}}">
                            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-800">Reserver ce Bien</button>
                        </a>
                            @else
                            <button class="btn bg-red-600 text-white" disabled="disabled">Ce Bien A deja Ete Reserver</button>
                                
                            @endif
                      
                        
                        <a href="/">
                            <button class="bg-black text-white px-4 py-2 rounded-lg hover:bg-gray-800">Retour</button>
                        </a>
            
                    </div>
                </div>
            </div>
        
        
         
              
        
        
        
            
         
        
        
        </div>














    </div>
   
    

</body>
</html>






















