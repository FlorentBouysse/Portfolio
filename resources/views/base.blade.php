<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Billy</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="py-4 bg-gray-900 flex text-current">
        <a class="text-green-400 px-4" href="#">Home</a>
        <a class="text-green-400 px-4" href="#">About me</a>
        <a class="text-green-400 px-4" href="#">Contact</a>
    </nav>
    <main class="bg-gray-900 text-white py-8 ps-8 overflow-hidden">
        @yield('content')

    </main>
    <footer class="py-4 text-white bg-gray-900 text-center">
        <div class="text-2xl flex justify-evenly pb-5">
            <i class="fa-brands fa-linkedin-in"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-github"></i>
        </div>  
        @Devcode
    </footer>
</body>
</html>