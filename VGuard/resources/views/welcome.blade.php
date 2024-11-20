<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VGuard - Sistema de Seguridad para Conductores</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-900 font-sans antialiased">
    <!-- Header con navegación mejorada -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="flex items-center space-x-3">
                    <i class="fas fa-shield-alt text-red-600 text-3xl"></i>
                    <span class="text-2xl font-bold text-gray-900">VGuard</span>
                </a>
                
                <!-- Navegación principal -->
                <div class="hidden md:flex space-x-8">
                    <a href="#inicio" class="text-gray-700 hover:text-red-600 font-medium">Inicio</a>
                    <a href="#caracteristicas" class="text-gray-700 hover:text-red-600 font-medium">Características</a>
                    <a href="#beneficios" class="text-gray-700 hover:text-red-600 font-medium">Beneficios</a>
                    <a href="#contacto" class="text-gray-700 hover:text-red-600 font-medium">Contacto</a>
                </div>

                <!-- Botones de acción -->
                <div class="flex space-x-4">
                    <a href="/login" class="px-4 py-2 text-gray-700 hover:text-red-600 font-medium">
                        <i class="fas fa-sign-in-alt mr-2"></i>Login
                    </a>
                    <a href="/register" class="px-6 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300">
                        Registrarse
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section mejorada -->
    <section id="inicio" class="pt-24 min-h-screen flex items-center relative bg-black">
        <div class="absolute inset-0 z-0">
            <div class="w-full h-full bg-gradient-to-r from-black via-transparent to-transparent absolute z-10"></div>
            <div class="w-full h-full bg-black opacity-50 absolute z-5"></div>
            <img src="/assets/logo2.jpg" class="w-full h-full object-cover" alt="Background">
        </div>
        
        <div class="container mx-auto px-6 relative z-20">
            <div class="max-w-3xl">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-tight mb-6">
                    Seguridad Inteligente al Volante
                </h1>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl">
                    Sistema avanzado de detección de somnolencia que utiliza IA para prevenir accidentes y proteger vidas en tiempo real.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#demo" class="px-8 py-4 bg-red-600 text-white rounded-lg hover:bg-red-700 transition duration-300 text-center">
                        Solicitar Demo
                    </a>
                    <a href="#caracteristicas" class="px-8 py-4 bg-white text-red-600 rounded-lg hover:bg-gray-100 transition duration-300 text-center">
                        Conoce Más
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Estadísticas Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div class="p-6">
                    <div class="text-4xl font-bold text-red-600 mb-2">98%</div>
                    <p class="text-gray-600">Precisión en detección</p>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-red-600 mb-2">+5000</div>
                    <p class="text-gray-600">Conductores protegidos</p>
                </div>
                <div class="p-6">
                    <div class="text-4xl font-bold text-red-600 mb-2">-75%</div>
                    <p class="text-gray-600">Reducción de incidentes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Características Section mejorada -->
    <section id="caracteristicas" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold mb-4">Características Principales</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Tecnología de última generación para garantizar la seguridad de tus conductores
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="text-red-500 mb-6">
                        <i class="fa-regular fa-eye text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Monitoreo en Tiempo Real</h3>
                    <p class="text-gray-600">Análisis continuo del estado de alerta del conductor utilizando tecnología de visión por computadora avanzada.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Detección facial precisa
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Análisis de parpadeo
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="text-red-500 mb-6">
                        <i class="fa-regular fa-bell text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Alertas Instantáneas</h3>
                    <p class="text-gray-600">Sistema multimodal de alertas que garantiza una respuesta inmediata ante signos de fatiga.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Alertas sonoras personalizables
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Notificaciones visuales
                        </li>
                    </ul>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg transform hover:-translate-y-1 transition duration-300">
                    <div class="text-red-500 mb-6">
                        <i class="fa-solid fa-shield text-5xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Prevención de Accidentes</h3>
                    <p class="text-gray-600">Sistema integral de prevención que reduce significativamente el riesgo de accidentes.</p>
                    <ul class="mt-4 space-y-2">
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Reportes detallados
                        </li>
                        <li class="flex items-center text-gray-600">
                            <i class="fas fa-check text-green-500 mr-2"></i>
                            Análisis predictivo
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Beneficios Section (Nueva) -->
    <section id="beneficios" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <div class="lg:w-1/2">
                    <h2 class="text-4xl font-bold mb-6">¿Por qué elegir VGuard?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-truck text-red-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl mb-2">Ideal para Flotas</h3>
                                <p class="text-gray-600">Gestiona la seguridad de toda tu flota desde una única plataforma centralizada.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-chart-line text-red-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl mb-2">Análisis Avanzado</h3>
                                <p class="text-gray-600">Obtén insights valiosos sobre el rendimiento y seguridad de tus conductores.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <i class="fas fa-mobile-alt text-red-600 text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-xl mb-2">Fácil Integración</h3>
                                <p class="text-gray-600">Sistema plug & play compatible con cualquier vehículo y dispositivo móvil.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-gray-100 p-8 rounded-xl">
                        <h3 class="text-2xl font-bold mb-6">Solicita una Demo Gratuita</h3>
                        <form id="demo-form" class="space-y-4">
                            <div>
                                <label class="block text-gray-700 mb-2">Nombre</label>
                                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Email</label>
                                <input type="email" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-gray-700 mb-2">Empresa</label>
                                <input type="text" class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 focus:border-transparent">
                            </div>
                            <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-lg hover:bg-red-700 transition duration-300">
                                Solicitar Demo
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section mejorada -->
    <section class="py-20 bg-gradient-to-r from-red-600 to-red-800 text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-8">Protege a tus conductores hoy mismo</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">
                No esperes a que ocurra un accidente. Implementa VGuard en tu flota y garantiza la seguridad de tus conductores.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contacto" class="px-8 py-4 bg-white text-red-600 rounded-lg hover:bg-gray-100 transition duration-300">
                    Contactar con Ventas
                </a>
                <a href="#demo" class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-lg hover:bg-white hover:text-red-600 transition duration-300">
                    Ver Demo
                </a>
            </div>
        </div>
    </section>

    <!-- Footer mejorado -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <i class="fas fa-shield-alt text-red-600 text-3xl"></i>
                        <span class="text-2xl font-bold text-white">VGuard</span>
                    </div>
                    <p class="text-gray-400">
                        Tecnología avanzada para la seguridad vial y la prevención de accidentes mediante inteligencia artificial.
                    </p>
                    <div class="flex space-x-4 mt-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-6">Producto</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white">Características</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Precios</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Casos de éxito</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Integraciones</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-6">Soporte</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white">Centro de ayuda</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Documentación</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Estado del sistema</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contacto</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-bold mb-6">Legal</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-gray-400 hover:text-white">Términos de servicio</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Política de privacidad</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Cookies</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Licencias</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-sm text-gray-400">© 2024 VGuard. Todos los derechos reservados.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="text-sm text-gray-400 hover:text-white">Mapa del sitio</a>
                        <a href="#" class="text-sm text-gray-400 hover:text-white">Blog</a>
                        <a href="#" class="text-sm text-gray-400 hover:text-white">Prensa</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script para el smooth scroll -->
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>