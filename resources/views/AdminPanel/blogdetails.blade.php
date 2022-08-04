<!DOCTYPE html>
<html lang="en">

<head>
    @include('Components.css')
</head>

<body data-spy="scroll" data-target=".navbar-fixed-top" data-gr-c-s-loaded="true">
    <!-- loader -->
    <div class="wrapper">
        <!-- ======== Header Section ======  -->
        <div id="content" class="ap-com content-wrapper">
            <!-- Sidebar start -->
            @include('Components.left_panel')
            <div class="ap-com content-manger" style="background-image:url(images/bg_sm.png);">
                <!-- header start -->
                @include('Components.header')
                <div class="ap-com container-main">
                    <div class="container">
                        <div class="row mb-4 align-items-center">
                            <div class="col col-6">
                                <div class="ap-com sm-com-heading">
                                    <h3>Blog Details</h3>
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="text-end"> <a href="{{route('bloglist')}}" class="grad-btn grad-btn-color"> Back </a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col col-12">

                            </div>

                        </div>

                        <section class="ap-com blog_details_container">
                            <div class="container">
                                <div class="row ">
                                    <div class="col col-lg-12 col-12">
                                        <div class="left-side-details">
                                            <div class="blog-img">
                                                <img src="images/blog-imgs/blogdetailsimg.jpg">
                                            </div>
                                            <div class="lower-text">
                                                <h5> MD SWEEM</h5>
                                                <div class="peoplfy_heading lheading">
                                                    <h2 class="color_b">Sunt in culpa qui officia deserunt mollit animed
                                                        kyest laborum</h2>
                                                </div>
                                                <div class="blog-para">
                                                    <p>Duis aute irure dolor reprehenderit in voluptate velit essl
                                                        cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec
                                                        atus cupdatat proident suntin culpa qui officia deserunt mol
                                                        anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        sed do eiusmod tempor.</p><br>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate.</p> <br>
                                                    <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                        occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                                        omnis iste natus error sit voluptatem accusantium doloremque
                                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                                        veritatis et quasi architecto beatae vitae dicta sunt.</p>

                                                    <blockquote class="blockquote">
                                                        <div class="quote">
                                                            <i class="fas fa-quote-right"></i>
                                                        </div>
                                                        <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                                            ea commodo consequat. voluptate velit esse cillum dolore eu
                                                            fugiat nulla pariatur cepteur sint occaecat cupid deserunt
                                                            mollit anim id est laborum sed ut perspiciatis.</p>

                                                    </blockquote>
                                                    <p>Culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                                        perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae
                                                        vitae dicta sunt.</p><br>
                                                    <p>Mollit anim id est laborum sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore.</p><br>
                                                    <p>Duis aute irure dolor reprehenderit in voluptate velit essl
                                                        cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec
                                                        atus cupdatat proident suntin culpa qui officia deserunt mol
                                                        anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        sed do eiusmod tempor.</p><br>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        @include('Components.js')
</body>

</html>