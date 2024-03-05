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
                       
                          {{-- <li>
                            <a class="justify-between">
                              Profile
                              <span class="badge">New</span>
                            </a>
                          </li> --}}
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
        <section class="py-12 bg-gray-900 text-gray-100 sm:py-12 lg:py-16 h-screen">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="max-w-xl mx-auto text-center xl:max-w-2xl">
                    <h2 class="text-3xl font-bold leading-tight text-gray-50 sm:text-4xl xl:text-5xl mb-6 mt-16">My Reservations!</h2>
                    <p class="mb-4">We are creating a tool that helps you be more productive and efficient when building
                        websites and webapps</p>
        
                </div>
                <div
                    class="grid max-w-4xl lg:max-w-6xl grid-cols-1 mx-auto mt-8 text-center gap-y-4 sm:gap-x-8 sm:grid-cols-2 lg:grid-cols-3 sm:mt-12 lg:mt-20 sm:text-left">
                    @foreach ($biens as $bien)
                        
                    <div class="relative">
                        <div class="absolute -inset-1">
                            <div
                                class="w-full h-full rotate-180 opacity-30 blur-lg filter bg-gradient-to-r from-yellow-400 via-pink-500 to-green-600">
                            </div>
                        </div>
                        <div class="relative overflow-hidden bg-white shadow-md rounded-xl h-full">
                            <div class="p-9">
                                <img src="/images/{{$bien->picture}}" alt="" srcset="">
                                <h3 class="mt-6 text-2xl font-bold text-gray-900 sm:mt-10"><a href="/bien_page/{{$bien->id}}">{{$bien->titre}}</a></h3>
                                <p class="mt-6 text-base text-gray-600">{{$bien->description}}</p>
                                <a href="/annreserve/{{$bien['id']}}">
                                  <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-800">Annuler ce Bien</button>
                               </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
              
                </div>
            </div>
        </section>
    </div>
   
    

</body>
</html>