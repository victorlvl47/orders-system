<x-layout>
    <h1 class="mt-2 mb-2 text-4xl leading-none tracking-tight text-gray-900 md:text-5xl lg:text-1xl dark:text-white text-center">
        Agregar Pedido
    </h1>
    <div class="flex items-center justify-center min-h-screen bg-gray-900 mt-10 mb-10">
        <div class="w-full max-w-lg">
          <form method="POST" action="/orders" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
              <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                Nombre
              </label>
              <input name="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Ingrese el nombre">

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
              <input name="tipo_pedido" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="tipo_pedido" type="text" placeholder="Ingrese el tipo de pedido">

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
              <textarea name="descripcion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" placeholder="Ingrese la descripción"></textarea>

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
              <input name="fecha_entrega" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_entrega" type="date">

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
              <input name="fecha_recoleccion" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="fecha_recoleccion" type="date">

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
              <input name="cantidad_articulos" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidad_articulos" type="number" placeholder="Ingrese la cantidad de artículos">

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
              <input name="costo" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="costo" type="number" min="1" step="any" placeholder="Ingrese el costo">

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
            </div>
          </form>
        </div>
      </div>      
</x-layout>