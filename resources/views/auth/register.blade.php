<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <title>Registro de Usuario</title>
</head>

<body style="background: linear-gradient(to bottom, #660066 0%, #ff99cc 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 30rem;">
                    <div class="col-lg-4 bg-primary d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="bg-white p-2 mb-3 rounded">
                            <img src="{{ asset('images/Boe.jpg') }}" alt="Logo" style="width: 7rem;">
                        </div>
                        <h4 class="text-light">Minimarket CAROLINA</h4>
                        <h4 class="text-light">DOW302 - Diseño y Programación Orientada a la WEB</h4>
                    </div>
                    <div class="col-lg-8 bg-white">
                        <h4>Registro de Usuario</h4>
                        <small>Complete el formulario para registrarse</small>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                                    </div>
                                    <div class="mb-3 text-end">
                                        <button type="submit" class="btn btn-success">Registrar</button>
                                    </div>
                                </form>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
