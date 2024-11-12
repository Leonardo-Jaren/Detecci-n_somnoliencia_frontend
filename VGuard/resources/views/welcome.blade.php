<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGuard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center">
                <!-- Title -->
                <span class="text-2xl font-bold text-gray-900">VGuard</span>
            </a>
            <!-- Login and Register -->
            <div class="flex space-x-4">
                <a href="/login" class="text-gray-700 hover:text-red-600 font-medium">Login</a>
                <a href="/register" class="text-gray-700 hover:text-red-600 font-medium">Register</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="w-full py-24 bg-black text-white text-center bg-center bg-no-repeat" style="background-image: url('/assets/logo2.jpg'); background-size: cover; background-position: center 20%;">
    <div class="container mx-auto px-6 bg-black bg-opacity-75 py-10 rounded-lg">
        <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold">Mantén la seguridad al volante con VGuard</h1>
        <p class="mt-4 max-w-xl mx-auto text-gray-300 text-lg">Sistema avanzado de detección de somnolencia para conductores. Previene accidentes y salva vidas.</p>
    </div>
</section>


    <!-- Características Section -->
    <section class="w-full py-16 bg-gray-100">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold tracking-tight text-center mb-12">Características Principales</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-lg shadow-md text-left">
                    <!-- Icono alineado en la esquina superior izquierda -->
                    <i class="fa-regular fa-eye text-red-500 text-6xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Monitoreo en Tiempo Real</h3>
                    <p class="text-gray-600">Análisis continuo del estado de alerta del conductor utilizando tecnología de visión por computadora.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-left">
                <i class="fa-regular fa-bell text-red-500 text-6xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Alertas Instantáneas</h3>
                    <p class="text-gray-600">Notificaciones sonoras y visuales inmediatas cuando se detectan signos de somnolencia.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md text-left">
                <i class="fa-solid fa-shield text-red-500 text-6xl mb-4"></i>
                    <h3 class="text-xl font-bold mb-2">Prevención de Accidentes</h3>
                    <p class="text-gray-600">Reduce significativamente el riesgo de accidentes causados por la fatiga del conductor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="w-full py-16 bg-red-600 text-white text-center">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">Protege a tus conductores hoy mismo</h2>
            <p class="mt-4 max-w-lg mx-auto text-white text-lg">No esperes a que ocurra un accidente. Implementa SleepAlert en tu flota y garantiza la seguridad de tus conductores.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-6 bg-gray-900 text-gray-300">
        <div class="container mx-auto px-6 text-left">
            <p class="text-sm">© 2024 SleepAlert. Todos los derechos reservados.</p>
            <div class="mt-4 flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white text-sm">Términos de Servicio</a>
                <a href="#" class="text-gray-400 hover:text-white text-sm">Privacidad</a>
            </div>
        </div>
    </footer>

</body>
</html>
