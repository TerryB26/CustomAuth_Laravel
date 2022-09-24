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
    <div class="container justify-content-center align-items-center align-content-center" style="padding: 40px;">
        <div class="row">
            <div class="col" style="padding-right: 150px;padding-left: 150px;">
                <div class="border rounded-pill">
                    <h2 class="display-6 text-center" style="font-family: 'Advent Pro', sans-serif;padding-top: 10px;padding-bottom: 0px;margin-bottom: 0px;">Dashboard</h2>
                    <p class="text-center text-muted" style="font-family: 'Alegreya Sans', sans-serif;">Custom Authentication</p>
                </div>

                @if (Session::has('success'))
                    <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
                        <div class="alert alert-success border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('success')}}<br></span></div>
                    </div>
                @endif

                @if (Session::has('sign_success'))
                        <div class="d-flex justify-content-center align-items-center align-content-center" style="padding-top: 10px;">
                            <div class="alert alert-success border rounded alert-dismissible" role="alert" style="padding-right: 50px;padding-left: 51px;"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button><span>{{Session::get('sign_success')}}<br></span></div>
                        </div>
                @endif

            </div>
        </div>
        <div class="row text-center d-flex align-content-center" style="margin-top: 40px;">
            <div class="col text-center d-flex justify-content-center align-items-center align-content-center align-self-center" style="padding-top: 150px;padding-left: 0px;padding-right: 0px;">
                <div class="card">
                    <div class="card-body" style="width: 312.219px;">
                        <h4 class="card-title" style="font-family: 'Advent Pro', sans-serif;margin-bottom: 30px;">Active User</h4><label class="form-label">Name</label>
                        <p class="border rounded-pill" style="background: rgba(148,236,255,0.5);">{{$User_Data->Name}} {{$User_Data->Surname}}</p><label class="form-label">Email</label>
                        <p class="border rounded-pill" style="background: rgba(148,236,255,0.5);">{{$User_Data->Email}}</p>
                        <a class="btn btn-primary" role="button" style="margin-top: 10px;" href="{{'Logout'}}">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
