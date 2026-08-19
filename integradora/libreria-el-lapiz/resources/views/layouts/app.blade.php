<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería El Lápiz</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="bg-light">
    <header class="bg-primary text-white py-4 mb-4">
        <div class="container">
            <h1 class="text-center mb-0">
                Librería El Lápiz
            </h1>
        </div>
    </header>
    <main class="container mb-5">
        @yield('content')
    </main>
    <footer class="bg-white border-top text-center py-3 mt-5">
        Integradora - Franz Alanes Fuentes - 18 de agosto de 2026
    </footer>
</body>
</html>