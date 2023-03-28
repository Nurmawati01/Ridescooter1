<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/styles.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        @section('sidebar')
        <div style="background-color: white" class="border-end " id="sidebar-wrapper">

        </div>
        @show

        <div style="background-color: white" id="page-content-wrapper">
            @section('top')
            <nav class="navbar navbar-expand-lg " style="background-color: #039BE5; ">

                <img src="/logoscooter3.png" alt="" width="150px" height="auto">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-left:470px ">

                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="/beranda"
                            style="color: white; font-family: sans-serif; font-weight: bold;">Halaman Utama<span
                                class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link active" href="/tentang"
                            style="color: white; font-family: sans-serif; font-weight: bold; margin-left:40px;">Tentang
                            Kami <span class="sr-only">(current)</span></a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="" style="color: white; font-family: sans-serif; 
                            font-weight: bold; margin-left:40px;">Sewa Scooter</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/sewascter" style="color: black; font-family: sans-serif; font-weight: bold;">Sewa</a></li>
                                <li><a class="dropdown-item" href="/datasewa" style="color: black; font-family: sans-serif; font-weight: bold;">Data Sewa</a></li>
                            </ul>
                        </li>
                        <a class="nav-item nav-link" href="/scooter"
                            style="color: white; font-family: sans-serif; font-weight: bold; margin-left:30px;">Scooter</a>
                        <a href="/logout"><img src="/ic-logout.png" alt="" width="20px" height="20px"
                            style="margin-left: 30px; margin-top:10px"></a>
                    </div>
                </div>
            </nav>

            @show
            <div class="">
                @section('konten')

                @show
            </div>

            @show
            <div class="">
                @section('footer')
                <footer class="container-fluid text-center"
                    style="background-color: #039BE5; padding: 20px; padding-bottom: 10px;">
                    <p
                        style="color: white; font-family: sans-serif; font-weight: bold; margin-left:20px; text-align:center;">
                        Copyright 2023 Ride Scooter. All Rights Reserved</p>
                </footer>
                @show
            </div>
        </div>
    </div>

</body>

</html>