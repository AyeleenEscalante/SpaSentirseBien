<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Servicio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

<header class="py-2 shadow fixed w-full z-50" style="background-color: #fbb6ce;">
        <nav class="container mx-auto px-4 flex items-center justify-between">
            <a href="/" class="transform transition-transform duration-300 hover:scale-105">
                <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-24 w-auto animate-fade-in">
            </a>
            <h1 class="text-white text-xl font-semibold">Agregar Nuevo Servicio</h1>
        </nav>
    </header>

    <main class="container mx-auto px-4 pt-40">
        <div class="bg-white rounded shadow-md p-6 max-w-2xl mx-auto">
            @if(session('success'))
                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
                    <ul class="list-disc pl-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('servicios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del Servicio</label>
                    <input type="text" name="nombre" id="nombre" class="w-full border-gray-300 rounded px-4 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción</label>
                    <textarea name="descripcion" id="descripcion" rows="4" class="w-full border-gray-300 rounded px-4 py-2" required></textarea>
                </div>

                <div class="mb-4">
                    <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio</label>
                    <input type="number" name="precio" id="precio" step="0.01" class="w-full border-gray-300 rounded px-4 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="categoria" class="block text-gray-700 font-semibold mb-2">Categoría</label>
                    <input type="text" name="categoria" id="categoria" class="w-full border-gray-300 rounded px-4 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="subcategoria" class="block text-gray-700 font-semibold mb-2">Subcategoría</label>
                    <input type="text" name="subcategoria" id="subcategoria" class="w-full border-gray-300 rounded px-4 py-2" required>
                </div>

                <div class="mb-6">
                    <label for="imagen" class="block text-gray-700 font-semibold mb-2">Imagen del Servicio</label>
                    <input type="file" name="imagen" id="imagen" class="w-full" accept="image/*" required>
                </div>

                <button type="submit" class="bg-pink-600 text-white font-semibold py-2 px-6 rounded hover:bg-pink-700 transition">
                    Guardar Servicio
                </button>
            </form>
        </div>
    </main>
</body>
</html>
