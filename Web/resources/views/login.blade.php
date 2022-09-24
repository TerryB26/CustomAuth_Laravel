<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Custom Auth Desig</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aguafina+Script&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Kanadaka&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akronim&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akshar&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alata&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alatsi&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alef&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+SC&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alice&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike+Angular&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allan&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Allerta+Stencil&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Almendra+Display&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
</head>

<body>
    <section>
        <div class="container justify-content-center align-items-center align-content-center" style="padding: 40px;">
            <div class="row">
                <div class="col" style="padding-right: 150px;padding-left: 150px;">
                    <div class="border rounded-pill">
                        <h2 class="display-6 text-center" style="font-family: 'Advent Pro', sans-serif;padding-top: 10px;padding-bottom: 0px;margin-bottom: 0px;">User Sign.In</h2>
                        <p class="text-center text-muted" style="font-family: 'Alegreya Sans', sans-serif;">Custom Authentication</p>
                    </div>

                    @if (Session::has('fail'))
                        <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
                            <div class="alert alert-danger border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('fail')}}<br></span></div>
                        </div>
                    @endif

                    @if (Session::has('Logout_Success'))
                        <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
                            <div class="alert alert-success border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('Logout_Success')}}<br></span></div>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row text-center d-flex align-content-center" style="margin-top: 40px;">
                <div class="col text-center d-flex justify-content-center align-items-center align-content-center align-self-center" style="padding-top: 100px;">

                    <form action="" method="POST">
                        @csrf
                        <div class="input-group" style="padding-bottom: 20px;height: 60px;padding-right: 0px;margin-right: 150px;"><span class="input-group-text"><i class="icon-envelope text-muted"></i></span><input class="form-control" type="email" placeholder="User@email.com" name="email" value="{{old('email')}}"></div>

                            @error('email')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                            @enderror

                        <div class="input-group" style="padding-bottom: 20px;height: 60px;"><span class="input-group-text"><i class="icon-lock text-muted"></i></span><input class="form-control" type="password" placeholder="Password" name="password"></div>

                            @error('password')
                            <div>
                                <p class="text-danger border rounded border-2 border-danger shadow-sm pulse animated">This Field Is Required</p>
                            </div>
                            @enderror

                        <button class="btn btn-outline-primary border rounded border-primary shadow-sm" type="submit" style="margin-right: 2px;width: 150px;">Sign In</button>
                        <p style="padding-top: 15px;">Do not have an account?<a href="{{'Register'}}">&nbsp;Register</a></p>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
