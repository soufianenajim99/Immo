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
      
       
        <li><label for="my-drawer" class="btn btn-primary drawer-button">Ajouter Un Bien</label></li>
        <button class="btn btn-outline"><a href="/">Home</a></button> 
      
        <button class="btn btn-outline"><a href="{{route('logout')}}">Log-Out</a></button> 
      </ul>
    </div>
    <div class="navbar-end">
    
    </div>
  </div>




  <div class="drawer drawer-end">
    <input id="my-drawer-4" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
      <!-- Page content here -->
     
    </div> 
    <div class="drawer-side">
      <label for="my-drawer-4" aria-label="close sidebar" class="drawer-overlay"></label>
      <div class="menu p-4 w-80 min-h-full bg-base-200 text-base-content z-50">
        <form class="max-w-md mx-auto mt-20 p-6 bg-white border rounded-lg shadow-lg" action="{{route('bien.store')}}" method="POST">
          @csrf
          <h2 class="text-2xl font-bold mb-6">Editer un Bien</h2>
          <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="titre">
           Titre
          </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" type="text" placeholder="Titre de Bien" name="titre">
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Adresse:
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Adresse" name="adresse">
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Description:
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Description" name="description">
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Type:
              </label>
              <select class="block w-sm text-sm font-medium transition duration-75 border border-gray-800 rounded-lg shadow-sm h-9 focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 bg-none" >
                <option value="vente">vente</option>
                <option value="location">la location</option>
    
            
              </select>
          </div>
          
          <div class="mb-4">
              <button type="submit"
              class="hover:shadow-form rounded-md bg-[#000000] py-3 px-8 text-center text-base font-semibold text-white outline-none">
              Submit
          </button>
             
          
          </div>
             
          </div>
         
      </form>

      </div>
      
    </div>
  </div>




  <div class="drawer">
    <input id="my-drawer" type="checkbox" class="drawer-toggle" />
    <div class="drawer-content">
      
    </div> 
    <div class="drawer-side">
      <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
      <div class="menu p-4 w-80 min-h-full bg-base-200 text-base-content z-50">
        <form class="max-w-md mx-auto mt-20 p-6 bg-white border rounded-lg shadow-lg" action="{{route('bien.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <h2 class="text-2xl font-bold mb-6">Ajouter un Bien</h2>
          <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="titre">
           Titre
          </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" type="text" placeholder="Titre de Bien" name="titre">
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Adresse:
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Adresse" name="adresse">
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Description:
              </label>
              <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Description" name="description">
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Type:
              </label>
              <select class="select  w-full max-w-xs" name="type">
                <option disabled selected>Type:</option>
                
                <option value="vente">vente</option>
                <option value="location">la location</option>
              </select>
    
            
            
          </div>
          <div class="mb-4">
          

              <label class="block text-gray-700 font-bold mb-2" for="text">
            Picture:
              </label>
              <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="picture"/>

            
          </div>
          
          <div class="mb-4">
              <button type="submit"
              class="hover:shadow-form rounded-md bg-[#000000] py-3 px-8 text-center text-base font-semibold text-white outline-none">
              Submit
          </button>
             
          
          </div>
             
          </div>
         
      </form>

      </div>
     
    </div>
  </div>
    <div class="hidden absolute h-screen bg-slate-600 bg-opacity-60 blur-2xl z-10 w-screen" id="overlay">
    </div>
    <div id="popup-window" class="hidden fixed w-80 h-48  p-3 m-auto top-0 right-0 left-0 z-20 ">
        <form class="max-w-md mx-auto mt-20 p-6 bg-white border rounded-lg shadow-lg" action="{{route('bien.store')}}" method="POST">
            @csrf
            <h2 class="text-2xl font-bold mb-6">Bien Form</h2>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="titre">
             Titre
            </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" type="text" placeholder="Titre de Bien" name="titre">
            </div>
            <div class="mb-4">
            

                <label class="block text-gray-700 font-bold mb-2" for="text">
              Adresse:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Adresse" name="adresse">
            </div>
            <div class="mb-4">
            

                <label class="block text-gray-700 font-bold mb-2" for="text">
              Description:
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="text" type="text" placeholder="Description" name="description">
            </div>
            <div class="mb-4">
            

                <label class="block text-gray-700 font-bold mb-2" for="text">
              Type:
                </label>
                <select class="block w-sm text-sm font-medium transition duration-75 border border-gray-800 rounded-lg shadow-sm h-9 focus:border-blue-600 focus:ring-1 focus:ring-inset focus:ring-blue-600 bg-none" >
                  <option value="vente">vente</option>
                  <option value="location">la location</option>
      
              
                </select>
            </div>
            
            <div class="mb-4">
                <button type="submit"
                class="hover:shadow-form rounded-md bg-[#000000] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                Submit
            </button>
                <p
                class="hover:shadow-form rounded-md bg-[#ff0b0b] py-3 px-8 text-center text-base font-semibold text-white outline-none close">
                Close
            </p>
            
            </div>
               
            </div>
           
        </form>
       
      </div>    
     
    <div class="min-h-full">
      <!-- When the mobile menu is open, add `overflow-hidden` to the `body` element to prevent double scrollbars -->
      <header class="bg-white shadow-sm lg:static lg:overflow-y-visible" x-state:on="Menu open" x-state:off="Menu closed" :class="{ 'fixed inset-0 z-40 overflow-y-auto': open }" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="relative flex justify-between lg:gap-8 xl:grid xl:grid-cols-12">
            <div class="flex md:absolute md:inset-y-0 md:left-0 lg:static xl:col-span-2">
              <div class="flex flex-shrink-0 items-center">
                <a href="">
                  {{-- <img class="block h-8 w-auto" src="{{ asset($traject->driver->user->image) }}" alt="Your Company" width="80"
                  height="80"> --}}
                </a>
              </div>
            </div>
            <div class="min-w-0 flex-1 md:px-8 lg:px-0 xl:col-span-6">
              <div class="flex items-center px-6 py-4 md:mx-auto md:max-w-3xl lg:mx-0 lg:max-w-none xl:px-0">
                
              </div>
            </div>
            <div class="flex items-center md:absolute md:inset-y-0 md:right-0 lg:hidden">
              <!-- Mobile menu button -->
              <button type="button" class="-mx-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-rose-500">
                <span class="sr-only">Open menu</span>
                <svg x-description="Icon when menu is closed.
  
  Heroicon name: outline/bars-3" x-state:on="Menu open" x-state:off="Menu closed" class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
  </svg>
                <svg x-description="Icon when menu is open.
  
  Heroicon name: outline/x-mark" x-state:on="Menu open" x-state:off="Menu closed" class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
  </svg>
              </button>
            </div>
            <div class="hidden lg:flex lg:items-center lg:justify-end xl:col-span-4">
              
  
             
            </div>
          </div>
        </div>
  
        <nav class="hidden">
          <div class="mx-auto max-w-3xl space-y-1 px-2 pt-2 pb-3 sm:px-4">
            
              <a href="#" aria-current="page" class="bg-gray-100 text-gray-900 block rounded-md py-2 px-3 text-base font-medium" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;hover:bg-gray-50&quot;">Home</a>
            
              <a href="" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;hover:bg-gray-50&quot;">historique de trajets</a>
            
              <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;hover:bg-gray-50&quot;">Settings</a>
            
              <a href="#" class="hover:bg-gray-50 block rounded-md py-2 px-3 text-base font-medium" x-state-description="undefined: &quot;bg-gray-100 text-gray-900&quot;, undefined: &quot;hover:bg-gray-50&quot;">Select Traject</a>
            
          </div>
          <div class="border-t border-gray-200 pt-4">
            <div class="mx-auto flex max-w-3xl items-center px-4 sm:px-6">
              <div class="flex-shrink-0">
                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium text-gray-800">Chelsea Hagon</div>
                <div class="text-sm font-medium text-gray-500">chelsea.hagon@example.com</div>
              </div>
              <button type="button" class="ml-auto flex-shrink-0 rounded-full bg-white p-1 text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
                <span class="sr-only">View notifications</span>
                <svg class="h-6 w-6" x-description="Heroicon name: outline/bell" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0"></path>
  </svg>
              </button>
            </div>
            <div class="mx-auto mt-3 max-w-3xl space-y-1 px-2 sm:px-4">
              
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Your Profile</a>
              
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Settings</a>
              
                <a href="#" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">Sign out</a>
              
            </div>
          </div>
  
          <div class="mx-auto mt-6 max-w-3xl px-4 sm:px-6">
            <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-rose-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-rose-700">New Post</a>
  
            <div class="mt-6 flex justify-center">
              <a href="#" class="text-base font-medium text-gray-900 hover:underline">Go Premium</a>
            </div>
          </div>
        </nav>
      </header>
  
      <div class="py-10">
        <div class="mx-auto max-w-3xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-12 lg:gap-8 lg:px-8">
          <div class="hidden lg:col-span-3 lg:block xl:col-span-2">
         
          </div>
          
          <main class="lg:col-span-12">
            {{-- <h1>{{Auth::user()->gettable()}}</h1>
            <h1>{{Auth::user()->id}}</h1>
            <h1>{{$isAdmin = \App\Models\Driver::where('user_id', Auth::user()->id)->exists()}}</h1> --}}

            <div class="shadow-lg rounded-lg overflow-hidden mx-10">
                <table class="w-full table-fixed">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Titre de bien</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">adresse</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Type</th>
                            <th class="w-1/4 py-4 px-6 text-left text-gray-600 font-bold uppercase">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white">
                      @foreach ($biens as $bien)
                        <tr>
                            <td class="py-4 px-6 border-b border-gray-200">{{$bien->titre}}</td>
                            <td class="py-4 px-6 border-b border-gray-200 truncate">{{$bien->adresse}}</td>
                            <td class="py-4 px-6 border-b border-gray-200">{{$bien->type}}</td>

                            <td class="inline-flex items-center rounded-md shadow-sm">
                              <a href="{{ route('bien.edit',['bien'=>$bien['id']])}}"> <button type="submit" class="ml-2 px-4 py-2 font-medium text-white bg-green-600 rounded-md hover:bg-green-500 focus:outline-none focus:shadow-outline-red active:bg-green-600 transition duration-150 ease-in-out">Editer</button></a>



<form action="{{route('bien.destroy', ['bien' => $bien['id']])}}" method="POST" class=" m-0 p-0 ">
  @csrf
  @method('DELETE')
  <button type="submit" class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
      </form>


                          </td>
                            
                        </tr>
                        @endforeach
                      
                    </tbody>
                </table>
            </div>
          </main>
        </div>
      </div>
    </div>
  
    </div>
  
    </div>
    </div>
   
 
    <script src="{{url('./js/main.js')}}"></script>

</body>
</html>