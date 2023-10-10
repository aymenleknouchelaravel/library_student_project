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
    <title>Login</title>
    <style>
        .bk {
            background-image: url('mila.jpg');
            background-size: cover;
            min-height: 100vh;
        }

        .cardd {
            background-color: #ffffffc5;
            padding: 80px
        }
    </style>
</head>

<body>
    <div class="content bk">
        <div class="container">
            <div class="row">
                <div class="col-md-12 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-5  m-3 ">
                            <b>
                                <h3 class="text-black">
                                    Welcome To Digital Library Of Mila University for Read Books and Download It ...
                                </h3>
                            </b>
                        </div>
                        <div class="col-md-5 cardd m-3">
                            <div class="mb-4">
                                <h4>Sign In to <strong class="web-name">Library Of Unversity</strong></h4>
                                <p class="mb-4">Abdelhafid bossof mila</p>
                            </div>
                            <form action="/login" method="post">
                                @csrf
                                <div class="form-group first">
                                    <label for="email">Email</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group last mb-4">
                                    <label for="password">Password</label>
                                    <input name="password" type="password" class="form-control" id="password">
                                </div>
                                <input type="submit" value="Log In" class="btn text-white btn-block btn-info">
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
