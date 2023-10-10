<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="auth/fonts/icomoon/style.css">

    <link rel="stylesheet" href="auth/css/owl.carousel.min.css">


    <link rel="stylesheet" href="auth/css/bootstrap.min.css">


    <link rel="stylesheet" href="auth/css/style.css">

    <title>Register</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="auth/images/bg.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h3>Sign Up to <strong>Website Name</strong></h3>
                                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur
                                    adipisicing.</p>
                            </div>
                            @include('shared.errors')
                            <form action="/register" method="POST">
                                @csrf
                                <div class="form-group first">
                                    <label for="name">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" required>
                                </div>
                                <div class="form-group first">
                                    <label for="surname">Surname</label>
                                    <input name="surname" type="text" class="form-control" id="surname" required>
                                </div>
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input name="email" type="text" class="form-control" id="email" required>
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" required>
                                </div>
                                <input type="submit" value="Register" class="btn text-white btn-block btn-primary">
                                <div class="mt-3">
                                    <p class="mb-4">Already have an account? <a class="link"
                                            href="/login">login</a></p>
                                </div>
                                {{-- <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="auth/js/jquery-3.3.1.min.js"></script>
    <script src="auth/js/popper.min.js"></script>
    <script src="auth/js/bootstrap.min.js"></script>
    <script src="auth/js/main.js"></script>
</body>

</html>
