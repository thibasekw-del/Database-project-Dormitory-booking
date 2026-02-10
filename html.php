<?php
// เริ่มเซสชัน
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>apartment .... </title>
    <meta content="" name="keywords">
    <meta content="">
    <meta property="og:site_name" content="Apartment ">
    <meta property="og:title" content="">
    <meta property="og:description" content="รายละเอียดหอพัก อพาร์ทเม้น">
    <meta property="og:image" itemprop="image" content="">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <script>
    document.onkeydown = function(e) {
        if(event.keyCode == 123) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
            return false;
        }
        if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
            return false;
        }
    }

    document.addEventListener('contextmenu', function(e) {
        e.preventDefault();
    });
    </script>
</head>
<body oncontextmenu="return false">
<div class="container">
    <div class="row">
        <div class="col col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand text-white" href="html.php">Vipra Place </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="html.php">หน้าหลัก</a>
                            </li> 
                            <li class="nav-item">
                                <a href="login.php" class="nav-link text-white"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 ">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="" class="d-block w-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <br>
            <div class="alert alert-danger" role="alert">
                <h5> รายการห้องพัก </h5>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
        <div class="card" style="width: 100%;">
            <img src="https://scontent.fbkk22-6.fna.fbcdn.net/v/t1.15752-9/485944483_1218427000287666_5133729264075351958_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeEMiNnazSdtUp7WR0D6QXccGMWMHmUgpW8YxYweZSClbxKyYP4d9f95kMpqIg9f7kLHFCaQuKHcsj1uKjYO6PzG&_nc_ohc=JllQTrctnEgQ7kNvgGEnlEd&_nc_oc=AdngDvUKtYaQpO99RJIUo2l-gfSv5N0HTk1FQJDM_eGQ_VChV5E-LeiH9sZBqI-HZ_12q9a4_CUygJhOSLwH6NzL&_nc_zt=23&_nc_ht=scontent.fbkk22-6.fna&oh=03_Q7cD1wFs3xCSMn1Bd5zM09Fb7sVFMgjwNKJmeVXM4Y3uWCg0aQ&oe=6813CE8E" class="card-img-top" alt="...">
            <div class="card-body">
                <h6 class="card-title">
                ห้องแอร์          ค่าเช่า
                <font color="red">
                 5,000.00 บาท/เดือน
                </font> <br>
                ค่าสัญญา  10,000.00 บาท
                ค่าจอง  5,000.00 บาท
                <br>
                </h6>
                <a href="html1.php" class="btn btn-warning">รายละเอียด</a>
            </div>
        </div>
    </div>
<div class="container" style="margin-top: 100px; background-color: #e7ede6;">
    <div class="row">
        <div class="col-md-4" style="margin-top: 40px; margin-bottom: 30px;">
        </div>
        <div class="col-md-4" style="margin-top: 40px; margin-bottom: 30px;">
            <b>ติดต่อ</b> <br>
            <b>โทร : 0123456789</b> <br>
        </div>
    </div>
</div>
<div class="container" style=" background-color: #d4ded3;">
    <div class="row">
        <div class="col-md-12" style="margin-top: 30px; margin-bottom: 30px;">
            <center>
            
            </center>
            
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
