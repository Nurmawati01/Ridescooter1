<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/bs/css/bootstrap.min.css" rel="stylesheet">
    <link href="/styles.css" rel="stylesheet">
    <title>LOGIN</title>
</head>
<body>
    <div style="margin-top: 130px;">
        <section  >
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="/banner.png" 
                    class="img-fluid" alt="Sample image" style="width:150%">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="/proses">
                        @csrf
                        <H1 style="color: black; font-family: sans-serif; font-weight: bold; text-align:center">LOGIN</H1>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3" style="font-family: sans-serif; text-align:center">Username</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control form-control-lg"
                        placeholder="Masukan Username" style="font-family: sans-serif; font-size: 12px"/>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form3Example4" style="font-family: sans-serif; text-align:center">Password</label>
                        <input type="password" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Masukan Password" name="password" style="font-family: sans-serif; font-size: 12px"/>
                    </div>

                    <div class="text-center text-lg-start mt-3 pt-2">
                        <button type="submit" value="login" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;
                         font-family: sans-serif; text-align:center; font-weight: bold; font-size: 12px">Login</button>
                    </div>

                    </form>
                </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>