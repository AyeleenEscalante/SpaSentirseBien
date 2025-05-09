<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conócenos - Sentirse Bien</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow-y: auto;
            scroll-snap-type: y mandatory;
        }

        section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            scroll-snap-align: start;
        }

        #section1 {
            background-image: url('/imagenes/imagen_Fondo.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        #cuerpo{
            margin-top: 200px;
            margin-bottom: 10%;
            width: 100%;
            max-width: none;
            background-color: rgba(255, 255, 255, 0.8);
        }
        .nav{
            background-color: #fbb6ce;
        }

        #section2, #section3 {
            background-color: #fbb6ce;
        }

        .btn-nav {
            @apply text-white text-xl px-4 py-2 rounded transition duration-300;
            background: rgba(255, 255, 255, 0.1);
        }

        .btn-nav:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #fbb6ce;
        }
        .header {
            background-color: #fbb6ce;
            color: #fbb6ce;
        }

        #main-header.scrolled {
            background-color: rgba(0, 0, 0, 0.8);
        }

        @keyframes fade-in {
        from { opacity: 0; transform: translateY(-10px); }
        to { opacity: 1; transform: translateY(0); }
        }

        .animate-fade-in {
        animation: fade-in 1s ease-out;
        }

        #scrollTopBtn {
        font-size: 1.5rem;
        line-height: 1;
        }


    </style>
</head>
<body class="bg-white text-gray-800 font-sans">

<header id="main-header" class="py-2 bg-opacity-80 backdrop-blur-md  fixed w-full z-50" >
    <nav class="px-4 flex items-center justify-between" style="background-color: #fbb6ce; width: 100%;">        <!-- Logo con animación -->
        <a href="/" class="transform transition-transform duration-500 hover:scale-105">
            <img src="/imagenes/logo.png" alt="Logo Sentirse Bien" class="h-24 w-auto animate-fade-in">
        </a>

        <!-- Botón hamburguesa móvil -->
        <button id="menu-toggle" class="md:hidden text-pink-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>


    </nav>
</header >
    <section class="px-4 py-12" >
        <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-8 items-center" id="cuerpo" >
            <div class="text-justify" >
                <h2 class="text-2xl font-bold mb-4">¿Qué es sentirse bien spa?</h2>
                <p class="mb-4">Un equipo guiado por la experiencia, comprometido con tu bienestar</p>
                <p class="mb-4">En Sentirse Bien creemos que la belleza y el bienestar nacen del equilibrio entre el cuidado profesional y la calidez humana.</p>
                <p class="mb-4">Fundado por la <strong>Dra. Felicidad</strong>, reconocida profesional con una amplia trayectoria en el ámbito de la salud y la estética, nuestro spa es el resultado de años de dedicación, formación y pasión por acompañar a las personas en su camino hacia el bienestar integral.</p>
                <p class="mb-4">La Dra. Felicidad lidera y supervisa personalmente a un equipo de profesionales altamente cualificados, comprometidos con brindar una atención de excelencia en cada tratamiento. Cada integrante de nuestro staff comparte los mismos valores: vocación de servicio, empatía, profesionalismo y amor por lo que hacemos.</p>
                <p class="mb-4">En Sentirse Bien, combinamos técnicas innovadoras, experiencia clínica y un enfoque personalizado para que cada visita sea una experiencia transformadora.</p>
                <p class="mb-4">Estamos acá para acompañarte a sentirte bien, por dentro y por fuera.</p>
            </div>
            <div>
                <img src="/imagenes/equipo.jpg" alt="Nuestro equipo" class="rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <footer class="bg-gray-200 py-4 text-center">
        <p>&copy; {{ date('Y') }} Sentirse bien. Todos los derechos reservados.</p>
    </footer>

</body>
</html>