<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- title of site -->
    <title>CP:Scholarsphere</title>

    <!-- For favicon png -->
    <link rel="shortcut icon" href="{{ asset('public/images/icons/CP_icon.png') }}">
    <link rel="shortcut icon" type="image/icon" href="/images/icons/CP_icon.png" />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="{{ asset('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="/css/font-awesome.min.css">



    <link rel="stylesheet" href="{{ asset('public/css/advice.css') }}">
    <link rel="stylesheet" href="/css/advice.css">

    <!--bootstrap.min.css-->
    <!-- <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}"> -->
    <!-- <link rel="stylesheet" href="/css/bootstrap.min.css"> -->

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('public/css/bootsnav.css') }}">
    <link rel="stylesheet" href="/css/bootsnav.css">

    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('public/css/home.css') }}">
    <link rel="stylesheet" href="/css/home.css">

    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}">
    <link rel="stylesheet" href="/css/responsive.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->


</head>

<body>

    <!-- top-area Start -->
    <section class="top-area">
        <div class="header-area">
            <!-- Start Navigation -->
            <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy" data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">

                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">Scholar<span>Sphere</span></a>
                    </div><!--/.navbar-header-->
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class=" scroll active "><a href="./home.html">home</a></li>
                            <li class="scroll "><a href="./search.html">search</a></li>
                            <li class="scroll"><a href="./ranking.html">ranking</a></li>
                            <li class="scroll login"><a href="#explore"><span>login <i class="fa-solid fa-right-to-bracket"></i></span> </a></li>
                        </ul><!--/.nav -->
                    </div><!-- /.navbar-collapse -->
                </div><!--/.container-->
            </nav><!--/nav-->
            <!-- End Navigation -->
        </div><!--/.header-area-->

    </section><!-- /.top-area-->
    <!-- top-area End -->

    <div class="page-wrapper" style="margin: 5% 10%;">
        <div class="row">
            <div class="col-2 pt-2">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv3ibwkonYu0NIfU5gcmEvVNRI2HEZz-9_4goKpNizoQ&s" class="img-thumbnail" alt="...">
                <div class="mt-3">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="col-9 ms-3">
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">รหัสนักศึกษา </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">ชื่อ </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">นามสกุล </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">ชื่อเล่น </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">

                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">เบอร์โทรติดต่อ </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">E-mail </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">ID Line</label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">facebook </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">ระดับการศึกษา </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row">
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">ปีสำเร็จการศึกษา </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">คณะ </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label" id="headinput">สาขา </label>
                            <div class="input-group">
                                <input type="text" class="form-control boxinput" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col ">
                <div class="d-flex justify-content-end ms-5">
                    <button class="btn btn-primary w-25 next_questuin">ถัดไป</button>
                </div>
            </div>
        </div>




    </div>

    <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="hm-footer-copyright">
                <div class="row">
                    <div class="col-sm-5">
                        <p>
                            &copy; Copyright 2023 Research by <a href="https://www.themesine.com/">College of
                                Computing KKU</a>
                        </p><!--/p-->
                    </div>
                    <div class="col-sm-7">
                        <div class="footer-social">
                            <span><i class="fa fa-phone"> 043-009700 ต่อ 44456, 44459, 44457</i></span>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

            </div><!--/.hm-footer-copyright-->
        </div><!--/.container-->

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
            </div>

        </div><!--/.scroll-Top-->

    </footer><!--/.footer-->
    <!--footer end-->

    <!-- Include all js compiled plugins (below), or include individual files as needed -->
    <script>
        $(document).ready(function() {
            $(".next_questuin").click(function() {
                
            });
        });
    </script>
</body>

</html>