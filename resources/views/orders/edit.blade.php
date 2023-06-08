<x-layout>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"
            ><img class="w-24" src="{{asset('images/order-logo1.png')}}" alt="" class="logo"
        /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li class="text-white">
                <a href="/orders/manage" class="hover:text-laravel"
                    ><i class="fa-solid fa-list-check"></i>
                    Administrar Pedidos</a
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
        Editar Pedido <span class="bg-green-400 text-gray-50 rounded-md px-2">ID: {{$order->id}} </span>
    </h1>
    <div class="flex items-center justify-center bg-gray-900 mt-10 mb-10">
        <div class="w-full max-w-lg">
          <form method="POST" action="/orders/{{$order->id}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Nombre
              </label>
              <input name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Ingrese el nombre" value="{{$order->nombre}}">

              @error('nombre')
                <p class="text-red-500 text-xs mt-1">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo_pedido">
                Tipo de Pedido
              </label>
              <input name="tipo_pedido" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tipo_pedido" type="text" placeholder="Ingrese el tipo de pedido" value="{{$order->tipo_pedido}}">

              @error('tipo_pedido')
                <p class="text-red-500 text-xs mt-1">
                  {{$message}}
                </p>
              @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">
                Descripcion
              </label>
              <textarea name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" placeholder="Ingrese la descripción">{{$order->descripcion}}</textarea>

              @error('descripcion')
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
            @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_entrega">
                Fecha Entrega
              </label>
              <input name="fecha_entrega" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_entrega" type="date" value="{{$order->fecha_entrega}}">

              @error('fecha_entrega')
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
            @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="fecha_recoleccion">
                Fecha Recoleccion
              </label>
              <input name="fecha_recoleccion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_recoleccion" type="date" value="{{$order->fecha_recoleccion}}">

              @error('fecha_recoleccion')
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
            @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="cantidad_articulos">
                Cantidad de Articulos
              </label>
              <input name="cantidad_articulos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidad_articulos" type="number" placeholder="Ingrese la cantidad de artículos" value="{{$order->cantidad_articulos}}">

              @error('cantidad_articulos')
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
            @enderror
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="costo">
                Costo
              </label>
              <input name="costo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="costo" type="number" min="1" step="any" placeholder="Ingrese el costo" value="{{$order->costo}}">

              @error('costo')
              <p class="text-red-500 text-xs mt-1">
                {{$message}}
              </p>
            @enderror
            </div>
            <div class="flex items-center justify-between">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Agregar Pedido
              </button>
              <a href="/orders/manage" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Cancelar</a>
            </div>
          </form>
        </div>
      </div>      
</x-layout>