<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'UTC Student Register') }}</title>
    <link rel="icon" type="image/png" href="https://rms.utc.ac.th/files/01013_1809190994117.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- style --}}
    <link rel="stylesheet" href="<?php echo asset('css/nav.css'); ?>" type="text/css">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

</head>

<body class="body">
    <?php
    $menu = ['เข้าสู่ระบบ', 'สมัคร', 'เพิ่มเติม'];
    ?>
    
        <nav class="navbar fixed-top bg-light shadownav rounded-3 p-2">
            <div class="container">

            <div class="row">
                <div class="col">
                    <a class="navbar-brand " href="#"><img
                            src="https://rms.utc.ac.th/files/01013_1809190994117.png" alt="" width="40"
                            height="40" class="d-inline-block align-text-top"></a>
                </div>
            </div>
            
            <div class="row">
                <div class="col-3">
                    {{-- <a class="btn btn-success btn-sm" href="">{{$menu[0]}}</a> --}}
                    <a class="btn btn-success btn-sm" href="">{{$menu[0]}}</a>
                </div>

                <div class="col-3">
                    <a class="btn btn-success" href="">{{$menu[1]}}</a>
                </div>

                <div class="col-3">
                    <a class="btn btn-success" href="">{{$menu[2]}}</a>
                </div>
            </div>
        </div>

        </nav>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
