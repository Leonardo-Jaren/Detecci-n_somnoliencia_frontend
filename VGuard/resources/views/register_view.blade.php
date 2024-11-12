<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h1 class="text-6xl font-extrabold text-center mb-4"
        style="color: #1C1C1C; font-family: 'Smooch Sans', sans-serif;">Bienvenido</h1>
        <p class="text-center text-gray-600 mb-6">Únete a nuestra comunidad</p>

        <form action="">
            <div class="space-y-4">
                <div class="relative">
                    <i class="ri-user-line absolute left-3 top-3.5 text-gray-400"></i>
                    <input type="text" id="username"
                    required placeholder="Username"
                    class="w-full pl-10 p-3 border border-gray-300 rounded-md
                    focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-100 placeholder-gray-400">
                </div>

                <div class="relative">
                    <i class="ri-lock-line absolute left-3 top-3.5 text-gray-400"></i>
                    <input type="password" id="password" required placeholder="Password"
                     class="w-full pl-10 p-3 border border-gray-300 rounded-md focus:outline-none
                     focus:ring-2 focus:ring-blue-500 bg-gray-100 placeholder-gray-400">
                </div>

                <div class="relative">
                    <i class="ri-lock-line absolute left-3 top-3.5 text-gray-400"></i>
                    <input type="password" id="confirmPassword" required placeholder="Confirm Password"
                     class="w-full pl-10 p-3 border border-gray-300 rounded-md focus:outline-none
                     focus:ring-2 focus:ring-blue-500 bg-gray-100 placeholder-gray-400">
                </div>

                <div class="relative">
                    <i class="ri-barcode-line absolute left-3 top-3.5 text-gray-400"></i>
                    <input type="text" id="productCode" required placeholder="Código de producto"
                    class="w-full pl-10 p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2
                     focus:ring-blue-500 bg-gray-100 placeholder-gray-400">
                </div>
            </div>

            <button type="submit" class="w-full mt-6 p-3 bg-black text-white font-semibold rounded-md
             hover:bg-red-600">Next</button>
        </form>

        <p class="text-center mt-4 text-gray-600">
            ¿Ya tienes una cuenta?
            <a href="/login" class="text-blue-500 hover:underline">Iniciar sesión</a>
        </p>

        <!-- Botón de Login con Google -->
        <div class="text-center mt-4">
            <p class="text-gray-500">O</p>
            <div class="mt-4">
                <a href="{{url('auth/google')}}" class="flex items-center justify-center w-full py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-100">
                    <i class="ri-google-fill text-black-600 text-lg mr-2"></i>
                    <span>Iniciar sesión con Google</span>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
