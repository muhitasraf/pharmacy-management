<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <title>WELCOME TO INSAFE SERVICE</title>
    <link rel="stylesheet" href="styles/style.css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>

<body>
    <form method="POST" action="{{route('login')}}">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @auth
            <script>window.location = "{{ route('dashboard') }}";</script>
        @endauth

        @guest
            <div class="row">
                <div class="" style="margin-top:50px">
                    <div class="rounded d-flex justify-content-center">
                        <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                            <div class="text-center">
                                <h3 class="text-primary">Sign In</h3>
                            </div>
                            <div class="p-4">
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary">
                                        <i class="bi bi-person-plus-fill text-white"></i>
                                    </span>
                                    <input type="Email" id="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text bg-primary">
                                        <i class="bi bi-key-fill text-white"></i>
                                    </span>
                                    <input type="password" id="password" name="password" value="{{old('password')}}" class="form-control password" placeholder="password" required>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Remember Me</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary text-center mt-2" type="submit">Login</button>
                                </div>
                                <p class="text-center mt-3">
                                    Don't have an account?
                                    <span class="text-primary">
                                        <a style="text-decoration:none;" href="">Sign Up</a>
                                    </span>
                                </p>
                                <p class="text-center text-primary">
                                    <a style="text-decoration:none;" href="">Forget Password?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endguest
    </form>
</body>

</html>
