<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nueva Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
        <h1 class="login__title text-6xl font-extrabold text-center m-0" style="color: #1C1C1C; font-family: 'Smooch Sans', sans-serif; transform: scaleY(1.4);">Bienvenido</h1>

        <form action="">
            <div class="space-y-4">
                <div>
                
                    <div class="relative mt-6">
                        <input 
                            type="text" 
                            id="names" 
                            required 
                            placeholder=" Username" 
                            class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 bg-gray-100 placeholder-gray-400"
                            style="font-family: 'FontAwesome', sans-serif;">
                    
            
                    </div>
                    
                </div>

                <div>
                    
                    <div class="relative">
                        <input type="pas" id="password" required placeholder="Password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="ri-user-line absolute right-3 top-3 text-gray-400"></i>
                    </div>
                </div>

                <div>
                    
                    <div class="relative">
                        <input type="password" id="passwordCreate" required placeholder="Confirm Password" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="ri-lock-line absolute right-3 top-3 text-gray-400"></i>
                    </div>
                </div>

                <div>
                    
                    <div class="relative">
                        <input type="code" id="code" required placeholder="Code of Product" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="ri-mail-line absolute right-3 top-3 text-gray-400"></i>
                    </div>
                </div>

            
            </div>

            <button type="submit" class="w-full mt-6 p-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600">Create account</button>
        </form>

        <p class="text-center mt-4 text-gray-600">
            Already have an account? 
            <a href="/login" class="text-blue-500 hover:underline">Log In</a>
        </p>
    </div>

    <--!-- Remixicon para los iconos -->
    <!--link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"-->
<!--/body>
</html-->


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
             hover:bg-gray-800">Next</button>
        </form>

        <p class="text-center mt-4 text-gray-600">
            ¿Ya tienes una cuenta? 
            <a href="/login" class="text-blue-500 hover:underline">Iniciar sesión</a>
        </p>

        <div class="text-center mt-6">
            <p class="text-gray-500">O</p>
            <button class="flex items-center justify-center w-full mt-2 border border-gray-300 rounded-md py-2 hover:bg-gray-100 transition duration-200">
                <img src="icon-google.svg" alt="Google" class="w-6 h-6 mr-2">
                <span class="text-gray-600 font-medium">Login with Google</span>
            </button>
        </div>
    </div>
</body>
</html>