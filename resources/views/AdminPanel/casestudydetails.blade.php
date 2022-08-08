<x-layout>
  <!-- loader -->
  <div class="wrapper">
    <!-- ======== Header Section ======  -->
    <div id="content" class="ap-com content-wrapper">
      <!-- Sidebar start -->
      @include('components.left_panel')
      <div class="ap-com content-manger" style="background-image:url({{asset('images/bg_sm.png')}});">
        <!-- header start -->
        @include('components.header')
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
                        <img src="{{ Storage::url($casestudy->Images_Author_Photo)}}" alt="">
                      </div>
                      <div class="lower-content">
                        <div class="clearfix">
                          <div class="pull-left">
                            <ul class="post-meta clearfix">
                              <li>{{($casestudy->created_at)}}</li>
                              <li>{{$casestudy->Created_by}}</li>
                            </ul>
                          </div>
                        </div>
                        <h2><span>{{$casestudy['Title']}}</span></h2>
                        <span>
                          <div class="text">
                            {!! $casestudy->Details !!}
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
</x-layout>