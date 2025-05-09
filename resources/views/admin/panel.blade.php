<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Administración</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen font-sans">

    <!-- Header fijo -->
    <header class="py-2 shadow fixed w-full z-50" style="background-color: #fbb6ce;">
        <nav class="container mx-auto px-4 flex items-center justify-between">
            <a href="/" class="transform transition-transform duration-300 hover:scale-105">
                <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-24 w-auto animate-fade-in">
            </a>
            <h1 class="text-white text-xl font-semibold">Panel de Administración</h1>
        </nav>
    </header>

    <!-- Contenido -->
    <main class="pt-32 container mx-auto px-4">
        <div class="bg-white shadow-md rounded p-6 max-w-4xl mx-auto text-center">
            <h2 class="text-2xl font-bold text-pink-600 mb-6">Bienvenida, Administradora</h2>

            <p class="mb-6 text-gray-700">Desde aquí puedes gestionar los servicios del spa:</p>

            <div class="grid md:grid-cols-2 gap-6">
                <a href="{{ route('servicios.index') }}" class="block bg-pink-500 text-white py-3 px-6 rounded hover:bg-pink-600 transition">Ver Servicios</a>
                <a href="{{ route('servicios.create') }}" class="block bg-green-500 text-white py-3 px-6 rounded hover:bg-green-600 transition">Agregar Nuevo Servicio</a>
            </div>
        </div>
    </main>

</body>
</html>
