<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('storage/image/icon.jpeg" type="image/x-icon">
    <title>Registro - Ben 10</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    <div class="container-fluid">
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-0 mr-md-auto font-weight-normal">Ben 10</h5>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-2 text-dark" href="./index.blade.php">Início</a>
                <a class="p-2 text-dark" href="./show.blade.php">Listar</a>
                <a class="p-2 text-dark" href="./search.blade.php">Procurar</a>
                <a class="p-2 text-dark" href="./delete.blade.php">Excluir</a>
            </nav>
            <a class="btn btn-outline-primary" href="./new.blade.php">Novo</a>
        </div>
    </div>
    <main>
        <div class="container-fluid">
            @hasSection('content')
                @yield('content')
            @endif
        </div>
    </main>
    <footer class="footer navbar-fixed-bottom">
        <div class="container-fluid">
            <p class="text-center">Todos os direitos reservados a ©Copyright</p>
        </div>
    </footer>
</body>
</html>