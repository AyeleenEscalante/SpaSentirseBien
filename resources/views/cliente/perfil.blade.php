<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil del Cliente - Sentirse Bien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-y: auto;
        }

        #cuerpo {
            margin-top: 200px;
            margin-bottom: 10%;
            width: 100%;
            max-width: none;
            background-color: rgba(255, 255, 255, 0.8);
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }

        @keyframes fade-in {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-white text-gray-800 font-sans">

    <!-- Header -->
    <header id="main-header" class="py-2 bg-opacity-80 backdrop-blur-md fixed w-full z-50" >
        <nav class="px-4 flex items-center justify-between" style="background-color: #fbb6ce; width: 100%;">
            <!-- Logo -->
            <a href="/" class="transform transition-transform duration-500 hover:scale-105">
                <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-24 w-auto animate-fade-in">
            </a>

            <!-- Menú usuario -->
            <div class="hidden md:flex space-x-4 items-center">
                <a href="/conocenos" class="text-white font-semibold px-4 py-2 rounded hover:bg-pink-500 transition">Conócenos</a>
                <a href="/servicios" class="text-white font-semibold px-4 py-2 rounded hover:bg-pink-500 transition">Servicios</a>
                <a href="/#section3" class="text-white font-semibold px-4 py-2 rounded hover:bg-pink-500 transition">Consultas</a>
                
                @auth
                    <div class="relative group">
                        <button class="flex items-center space-x-2 bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 10a4 4 0 100-8 4 4 0 000 8zm0 2c-3 0-6 1.5-6 4v1h12v-1c0-2.5-3-4-6-4z" />
                            </svg>
                            <span>{{ auth()->user()->name }}</span>
                        </button>
                        <div class="absolute hidden group-hover:block right-0 mt-2 w-48 bg-white rounded shadow-md z-50">
                            <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ver Perfil</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cerrar sesión</button>
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
        </nav>
    </header>

    <!-- Contenido -->
    <section class="min-h-screen flex items-center justify-center px-4 pt-32 pb-10">
    <div class="max-w-xl w-full bg-white bg-opacity-90 shadow-lg rounded-xl p-8 text-center">
        
        {{-- Ícono de perfil --}}
        <div class="flex justify-center mb-6">
            <div class="w-24 h-24 rounded-full bg-pink-100 flex items-center justify-center text-pink-600 text-4xl shadow-inner">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A9.003 9.003 0 0112 15a9.003 9.003 0 016.879 2.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </div>
        </div>

        <h2 class="text-2xl font-bold mb-6 text-pink-600">Perfil del Cliente</h2>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-1">Nombre:</label>
            <p class="text-gray-800">{{ $cliente->name }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-1">Correo electrónico:</label>
            <p class="text-gray-800">{{ $cliente->email }}</p>
        </div>

        <div class="mb-6">
            <label class="block text-gray-700 font-bold mb-1">Teléfono:</label>
            <p class="text-gray-800">{{ $cliente->telefono ?? 'No especificado' }}</p>
        </div>

        <div class="flex justify-between mt-6">
            <a href="/" class="text-pink-600 font-semibold hover:underline">← Volver al inicio</a>
            <a href="/editar-perfil" class="text-pink-600 font-semibold px-4 py-2 rounded-lg border border-pink-600 hover:bg-pink-100 transition">
                Editar Perfil
            </a>
        </div>
    </div>
    </section>


    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse Bien. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
