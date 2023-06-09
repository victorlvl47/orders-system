<x-layout>
    <nav class="flex justify-between items-center mb-4">
        <a href="/"
            ><img class="w-24" src="{{asset('images/order-logo1.png')}}" alt="" class="logo"
        /></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            <li class="text-white">
                <a href="/" class="hover:text-laravel"
                    ><i class="fa-solid fa-home"></i>
                    Regresar</a
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
    <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white text-center">
        Sistema Pedidos
    </h1>
    {{-- <div class="flex items-center justify-center p-4">
        <a href="/orders/create" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Agregar Pedido +
        </a>
    </div> --}}
    <div class="flex items-center justify-center bg-gray-900 mb-10">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th>Id Pedido</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="bg-gray-800">
                                <td class="p-3">{{$order->id}}</td>
                                <td class="p-3">{{$order->nombre}}</td>
                                <td class="p-3">{{$order->descripcion}}</td>
                                <td class="px-4 py-8 text-lg text-center">
                                    <a
                                        href="/orders/{{$order->id}}/edit"
                                        class="text-cyan-400"
                                    >
                                        <i class="fa-solid fa-pen-to-square"></i> Editar
                                    </a>
                                </td>
                                <td class="px-4 py-8 text-lg text-center">
                                    <form method="POST" action="/orders/{{$order->id}}">
                                    @csrf
                                    @method('DELETE')
                                        <button class="text-red-500">
                                            <i class="fa-solid fa-trash"></i> Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>