<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class=""><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>apartment .... ห้องแอร์</title>
    <meta content="ห้องแอร์" name="keywords">
    <meta content="ห้องแอร์">
    <meta property="og:site_name" content="Apartment ">
    <meta property="og:title" content="ห้องแอร์">
    <meta property="og:description" content="รายละเอียดหอพัก อพาร์ทเม้น">
    <meta property="og:image" itemprop="image" content="http://127.0.0.1/apartment/img/99243267120211218_143348.jpg">
    <meta property="og:type" content="website">
     <meta name="twitter:card" content="ห้องแอร์">
    <meta name="twitter:title" content="ห้องแอร์">
    <meta name="twitter:description" content="ห้องแอร์">
    <meta name="twitter:image" content="http://127.0.0.1/apartment/img/99243267120211218_143348.jpg">
 
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
  <style type="text/css">.fancybox-margin{margin-right:15px;}</style></head>
 <body oncontextmenu="return false" style="">
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
</div><div class="container">
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
    </div><!-- Add jQuery library -->
  <script type="text/javascript" src="frontend/fancybox/lib/jquery-1.10.2.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="frontend/fancybox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="frontend/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="frontend/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen">

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="frontend/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5">
  <script type="text/javascript" src="frontend/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="frontend/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7">
  <script type="text/javascript" src="frontend/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="frontend/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }

  /*  body {
      max-width: 700px;
      margin: 0 auto;
    }*/
  </style>

<div class="container">
  <div class="row">
    <div class="col">
    </div>
  </div>
</div>
<!-- end hesder product-->
<!-- start product detail. -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <br>
      <h3><div class="alert alert-danger" role="alert">
      <font color="black">ห้องแอร์</font></div></h3>
      <br>
    </div>
    <div class="col-md-4"><img src="https://scontent.fbkk22-6.fna.fbcdn.net/v/t1.15752-9/485944483_1218427000287666_5133729264075351958_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=9f807c&_nc_eui2=AeEMiNnazSdtUp7WR0D6QXccGMWMHmUgpW8YxYweZSClbxKyYP4d9f95kMpqIg9f7kLHFCaQuKHcsj1uKjYO6PzG&_nc_ohc=JllQTrctnEgQ7kNvgGEnlEd&_nc_oc=AdngDvUKtYaQpO99RJIUo2l-gfSv5N0HTk1FQJDM_eGQ_VChV5E-LeiH9sZBqI-HZ_12q9a4_CUygJhOSLwH6NzL&_nc_zt=23&_nc_ht=scontent.fbkk22-6.fna&oh=03_Q7cD1wFs3xCSMn1Bd5zM09Fb7sVFMgjwNKJmeVXM4Y3uWCg0aQ&oe=6813CE8E" class="card-img-top" width="100%">
      <br><br>
                 
      
 
    </div>
    <div class="col-md-8">
      <h4>
        รายละเอียดห้อง : 
      ค่าเช่า
          <font color="red">
           5,000.00 บาท/เดือน
          </font> <br>
          ค่าสัญญา  10,000.00 บาท/
         ค่าจอง  5,000.00 บาท
          <br>
        </h4>
      <h3>สิ่งอำนวยความสะดวก ภายในห้อง</h3>

<ul>
	<li>แอร์</li>
	<li>เครื่องทำน้ำอุ่น</li>
	<li>เฟอร์นิเจอร์ - ตู้เสื้อผ้า,ชั้นวางของ,ตู้เย็น,ทีวี</li>
	<li>เตียง5ฟุต</li>
	<li>FREE WIFI &nbsp;&nbsp;</li>
	<li>ที่จอดรถมอเตอร์ไซค์</li>
</ul>
      <br>

          
    </div>
  </div>

    </div> <div class="container" style="margin-top: 100px; background-color: #e7ede6;">
      <div class="row">
        <div class="col-md-4" style="margin-top: 40px; margin-bottom: 30px;">
        </div>
        <div class="col-md-4" style="margin-top: 40px; margin-bottom: 30px;">
          <b>ติดต่อ</b> <br>
          <b>โทร : 0123456789 </b>  <br>
        </div>
      </div>
    </div>
    <div class="container" style=" background-color: #d4ded3;">
      <div class="row">
        <div class="col-md-12" style="margin-top: 30px; margin-bottom: 30px;">
 
        </div>
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script></body></html>