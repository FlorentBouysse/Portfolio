<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Back office</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="py-4 bg-slate-500 flex text-current md:px-40">
        <a class="text-red-950 px-4" href="#">Retour sur le site</a>
    </nav>
    <main class="bg-slate-500 py-8 ps-8 overflow-hidden md:px-40">
    
        @yield('content')

    </main>
    <footer class="py-4 text-red-950 bg-slate-500 text-center md:py-24">
        @Devcode
    </footer>
</body>
</html>