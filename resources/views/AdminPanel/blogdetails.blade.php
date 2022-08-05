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
            <div class="ap-com content-manger" style="background-image:url({{asset('images/bg_sm.png')}});">
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
                                        <div class="left-side-details inner-box-serv">
                                            <div class="blog-img">
                                                <img src="{{ Storage::url($blog->Images_Author_Photo)}}">
                                            </div>
                                            <div class="lower-content">
                                                <h5>{{$blog->Created_by}}</h5>
                                                <div class="peoplfy_heading lheading">
                                                    <h2 class="color_b"> <span>{{$blog['Title']}}</span></h2>
                                                </div>
                                                <div class="blog-para text">
                                                {!! $blog->Details !!}
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