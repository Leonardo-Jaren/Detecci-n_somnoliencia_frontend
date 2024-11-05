<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Login and Registration Form</title>
 
    <!-- Remix Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen" >
    <!-- LOGIN -->
    <div class="mt-5 relative h-screen bg-cover bg-fixed" 
    style="background-image: url('log_somno_guard.png'); filter: blur(5px); opacity: 0.5;">
        <!-- Este div solo actúa como fondo -->
    </div>


    <div class="bg-white shadow-lg rounded-lg p-10 md:w-1/3 w-full my-12 border border-gray-200" id="loginAccessRegister">
        <div class="mb-10 text-center">

            <h1 class="login__title text-6xl font-extrabold text-center m-0 text-gray-900 font-sans mb-4">Bienvenido</h1>
          <p class="text-gray-500">Nos alegra verte de nuevo con nosotros.</p>

            
            <!--h1 class="login__title text-6xl font-extrabold text-center m-0" 
            style="color: #1C1C1C; font-family: 'Smooch Sans', 
            sans-serif; transform: scaleY(1.4);">Bienvenido</h1>

            <p class="text-gray-500">Nos alegra verte de nuevo con nosotros.</p-->

        
        </div>
        
        <form action="" class="space-y-4">
            <div class="relative mb-4">
                <input type="usuario" id="usuario" required placeholder=" "
                 class="border border-gray-300 rounded-md 
                p-3 pl-10 w-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                <label for="usuario" class="absolute left-3 top-3 text-gray-500 transition-
                transform duration-200 scale-75 -translate-y-1/2">Usuario</label>
                <i class="ri-mail-fill absolute right-3 top-3 text-gray-500"></i>
                
            </div>

           
            <div class="relative mb-4">
                <input type="password" id="password" required placeholder=" " 
                class="border border-gray-300 rounded-md p-3 pl-10 w-full focus:outline-none 
                focus:ring-2 focus:ring-blue-500">
                <label for="password" class="absolute left-3 top-3 text-gray-500 transition-transform
                 duration-200 transform scale-75 -translate-y-1/2">Contraseña</label>
                <i class="ri-lock-fill absolute right-3 top-3 text-gray-500 cursor-pointer" 
                id="togglePassword"></i>
            </div>

            

            <button type="submit" class="w-full bg-black text-white font-semibold rounded-md py-2 
            hover:bg-blue-800 transition duration-200">Next</button>
        

            <!--button type="submit" class="w-full bg-blue-500 text-white font-semibold rounded-md 
            py-2 hover:bg-blue-600 transition duration-200">Next</button -->
        </form>

        <!--div class="text-center mt-4">
            <p class="text-gray-500">O</p>
            <a href="#" class="inline-block mt-2">
                <img src="/SomnolienciaFrontend/public/icon-google.svg" alt="G" class="w-8 h-8">
            </a>
        </div-->
    


        <div class="text-center mt-4">
            <p class="text-gray-500">O</p>
            <button class="flex items-center justify-center w-full mt-2 border border-gray-300 rounded-md 
            py-2 hover:bg-gray-100 transition duration-200">
                <img src="icon-google.svg" 
                alt="Google" class="w-6 h-6 mr-2">
                <span class="text-gray-600 font-medium">Login with Google</span>
            </button>
        </div>
        
        

        <p class="text-center text-gray-600 mt-4">
            No tienes una cuenta? 
            <a href="/register" class="text-blue-500 font-semibold">Regístrate</a>
        </p>
    </div>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('ri-eye-off-fill');
            this.classList.toggle('ri-eye-fill');
        });
    </script>
</body>
</html>