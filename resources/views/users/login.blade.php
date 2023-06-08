<x-layout>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"
            ><img class="w-24" src="{{asset('images/order-logo1.png')}}" alt="" class="logo"
        /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li class="text-white">
                <a href="/" class="hover:text-laravel"
                    ><i class="fa-solid fa-home"></i>
                    Regresar </a
                >
            </li>
            {{-- @auth
            <li>
                <span class="font-bold uppercase">
                    Welcome {{auth()->user()->name}}
                </span>
            </li>
            <li>
                <a href="/posts/manage" class="hover:text-laravel"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Manage Posts</a
                >
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>
            @else
            <li>
                <a href="/register" class="hover:text-laravel"
                    ><i class="fa-solid fa-gear"></i> Register</a
                >
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a
                >
            </li>
            @endauth --}}
        </ul>
    </nav>
    <h1 class="mt-2 mb-2 text-4xl leading-none tracking-tight text-gray-900 md:text-5xl lg:text-1xl dark:text-white text-center">
        Iniciar Sesi&#243;n
    </h1>
    <div class="flex items-center justify-center bg-gray-900 mt-10 mb-10">
        <div class="w-full max-w-lg">
          <form method="POST" action="/users" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                Nombre
              </label>
              <input name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Ingrese el nombre">

              @error('name')
                <p class="text-red-500 text-xs mt-1">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                Email
              </label>
              <input name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="ejemplo@mail.com">

              @error('email')
                <p class="text-red-500 text-xs mt-1">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                  Contrase&#241;a
                </label>
                <input name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password">
  
                @error('password')
                  <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                  </p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">
                  Confirmar Contrase&#241;a
                </label>
                <input name="password_confirmation" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password">
  
                @error('password_confirmation')
                  <p class="text-red-500 text-xs mt-1">
                    {{$message}}
                  </p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Registrarse
              </button>
              <a href="/" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
            </div>
            <p class="mt-5">No tienes cuenta? <a href="/register" class="text-blue-500">Registrase</a></p>
          </form>
        </div>
      </div>      
</x-layout>