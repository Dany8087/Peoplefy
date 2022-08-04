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
                <h3>Case Study Details</h3>
              </div>
            </div>
            <div class="col col-6">
              <div class="text-end"> <a href="{{route('casestudylist')}}" class="grad-btn grad-btn-color">Back </a> </div>
            </div>
          </div>
                    <div class="sidebar-page-container fy-com">
                        <div class="container">
                            <div class="row ">
                                <div class="content-side col-lg-12 col-12">
                                    <div class="inner-box-serv">
                                        <div class="image">
                                            <img src="assets/images/trunkey-img1.jpg" alt="">
                                        </div>
                                        <div class="lower-content">
                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <ul class="post-meta clearfix">
                                                        <li>June 15, 2021</li>
                                                        <li>Md Sweem</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h2><span>Sunt in culpa qui officia deserunt mollit animed kyest
                                                    laborum</span></h2>

                                            <span>
                                                <div class="text">
                                                    <p>Duis aute irure dolor reprehenderit in voluptate velit essl
                                                        cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec
                                                        atus cupdatat proident suntin culpa qui officia deserunt mol
                                                        anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        sed do eiusmod tempor.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate.</p>
                                                    <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                        occaecat cupidatat non proident, sunt in culpa qui officia
                                                        deserunt mollit anim id est laborum. Sed ut perspiciatis unde
                                                        omnis iste natus error sit voluptatem accusantium doloremque
                                                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                                        veritatis et quasi architecto beatae vitae dicta sunt.</p>
                                                    <blockquote>
                                                        <div class="quote-icon "><i class="fas fa-quote-right"></i>
                                                        </div>
                                                        <div class="blockquote-text">Quis nostrud exercitation ullamco
                                                            laboris nisi ut aliquip ex ea commodo consequat. voluptate
                                                            velit esse cillum dolore eu fugiat nulla pariatur cepteur
                                                            sint occaecat cupid deserunt mollit anim id est laborum sed
                                                            ut perspiciatis.</div>
                                                    </blockquote>
                                                    <p>Culpa qui officia deserunt mollit anim id est laborum. Sed ut
                                                        perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae
                                                        vitae dicta sunt.</p>
                                                    <p>Mollit anim id est laborum sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
                                                    <p>Duis aute irure dolor reprehenderit in voluptate velit essl
                                                        cillum dolore eud fugiat nulla pariatur. Excepteur sint ocaec
                                                        atus cupdatat proident suntin culpa qui officia deserunt mol
                                                        anim. Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                                        sed do eiusmod tempor.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex commodo consequat. Duis aute irure dolor in
                                                        reprehenderit in voluptate.</p>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
@include('Components.js')
</body>
</html>