<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTMX larax1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>

</head>
<body class="bg-gray-200">
    <div class="w-[1200px] mx-auto bg white shadow-lg">

        <section class="bg-blue-700 text-white flex items-center justify-between mt-3">
            <div id="brand" class="text-xl px-4">
                Branding App
            </div>
            <nav id="main-nav" class="flex">
                <a href="/" class="p-3 hover:bg-blue-600">Home</a>
                <a href="/about" class="p-3 hover:bg-blue-600">About</a>
                <a href="/product" class="p-3 hover:bg-blue-600">Products</a>
                <a href="/contact" class="p-3 hover:bg-blue-600">Contact Us</a>
            </nav>
        </section>

        <article id="content" class="min-h-[35rem] p-5">
            @yield('content')
        </article>

        <footer class="text-center text-gray-700 py-3">
            Copyright &copy; 2024. All right reseved.
        </footer>
    </div>
</body>
</html>