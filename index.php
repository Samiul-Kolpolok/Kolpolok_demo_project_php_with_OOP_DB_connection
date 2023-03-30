<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo for Kolpolok</title>
    <link rel="stylesheet" href="./assets/style.css">
    <!-- For Bootstrap cdn links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar starts here -->
    <?php
    include 'include/navbar.php';
     //echo "<pre>";
     $route = $_SERVER['PATH_INFO']?? '/';//default

    if($route == "/" || $route == "/home") {
     include 'pages/home.php';
     }elseif($route == "/about"){
     include 'pages/about.php';
     }elseif($route == "/services"){
      include 'pages/services.php';
     }elseif($route == "/testimonial"){
      include 'pages/testimonial.php';
     }elseif($route == "/newsletter"){
      include 'pages/newsletter.php';
     }elseif($route == "/hero"){
      include 'include/hero.php';
     }elseif($route == "/faq"){
      include 'include/faq.php';
     }else{
      die('page not found');
     }
     
     //echo "</pre>";
    ?>
    <!--Navbar ends here-->

    <!--Modal start for Get A Quote button-->
  
<!-- Modal -->
<section class="p-5" >
    <div class="container">
  <div class="modal fade" id="getaquote" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
       <form action="submit.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body">
            <div class="d-sm-flex align-items-center py-5">
                <a href="#">
                    <img src="./assets/kolpolok_modal_image.png" alt="kolpolok_limited_logo" width="350 px" height="350 px" />
                </a>
                <div class="ms-auto">
                    <h5 class="modal-title mb-5 text-info" id="staticBackdropLabel">Get a Free Quote</h5>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                      </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email (Required)*">
                      </div>
                      <div class="mb-3">
                        <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="Mobile">
                      </div>
                      <div class="mb-3">
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Write your message (Required)*"></textarea>
                      </div>
                      <div class="d-sm-flex align-items-center justify-content-between py-3">
                        <h1>4+8 = </h1>
                        <div>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Required*">
                        </div>
                      </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit Test</button>
        </div>
  </form>
      </div>
    </div>
  </div>
</div>
</section>
<!--Modal end to-->

<!--Footer Starts Here-->

<?php
include 'include/footer.php';
?>

<!--Footer Ends Here-->

<!--Script for Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>