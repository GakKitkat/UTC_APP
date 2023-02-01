<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>สมัครเข้าใช้งาน</title>
    <link rel="icon" type="image/png" href="https://rms.utc.ac.th/files/01013_1809190994117.png">
    {{-- style --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- css --}}
    <link rel="stylesheet" href="<?php echo asset('css/register.css'); ?>" type="text/css">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
</head>

<body class="body">
    <a href="{{ route('set') }}" class="btn btn-outline-success">Clean</a>
    <a href="{{ url('config') }}" class="btn btn-outline-success">Clean</a>

    <div class="container centered">
        <div class="card cradcenter">
            <div class="card-header">
                <h4 class="headercrad">สมัครเข้าใช้งาน</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="text" value="1234567890" hidden>

                    <label for="per_name" class="col-md-4 col-form-label text-md-start">{{ __('คำนำหน้า') }}</label>
                    <div class="mb-2">
                        <select id="prename" name="prename" class="form-select">
                            <option value="นาย">นาย</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="นาง">นาง</option>
                        </select>
                    </div>

                    <label for="frist_name"
                        class="col-md-4 col-form-label text-md-start">{{ __('ชื่อจริง ( ไทย )') }}</label>
                    <input class="form-control" type="text" name="frist_name" id="frist_name" value="พิพัฒน์พงศ์"
                        placeholder="กรอกชื่อ" required autofocus autocomplete="frist_name">

                    <label for="last_name"
                        class="col-md-4 col-form-label text-md-start">{{ __('นามสกุล ( ไทย )') }}</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="ศรีพรม"
                        placeholder="กรอกนามสกุล" required autofocus autocomplete="last_name">

                    {{-- แก้ฟอร์มนี้ต่อ --}}
                    
                    <label for="email"
                        class="col-md-4 col-form-label text-md-start">{{ __('email') }}</label>
                    <input class="form-control" type="email" name="email" id="email" value="Pop@gmail.com"
                        placeholder="กรอกนามสกุล" required autofocus autocomplete="email">
                        
                    <label for="last_name"
                        class="col-md-4 col-form-label text-md-start">{{ __('นามสกุล ( ไทย )') }}</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="ศรีพรม"
                        placeholder="กรอกนามสกุล" required autofocus autocomplete="last_name">

                    <label for="last_name"
                        class="col-md-4 col-form-label text-md-start">{{ __('นามสกุล ( ไทย )') }}</label>
                    <input class="form-control" type="text" name="last_name" id="last_name" value="ศรีพรม"
                        placeholder="กรอกนามสกุล" required autofocus autocomplete="last_name">


                </form>

            </div>
        </div>

    </div>


</body>

</html>
