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
                <h3>Add / Update Blog</h3>
              </div>
            </div>
            <div class="col col-6">
              <div class="text-end"> <a href="{{route('bloglist')}}" class="grad-btn grad-btn-color"> Back </a> </div>
            </div>
          </div>
          <form action="{{route('addingblog')}}" method="post" enctype="multipart/form-data">
          @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
            @csrf
            <div class="row">
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Title</label>
                  <input type="text" class="form-control" name="Blog_Title" value="" placeholder="Enter blog title" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Created By</label>
                  <input type="text" class="form-control" name="Blog_Created_by" value="" placeholder="Enter author name" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Type</label>
                  <input type="text" class="form-control" name="Blog_Type" value="" placeholder="Enter blog type" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Images and Author Photo</label>
                  <div class="file-loading">
                    <input type="file" class="inputphoto" name="Blog_Images_Author_Photo" multiple>
                  </div>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Details</label>
                  <textarea class="form-control editor-ctrl" name="Blog_Details" id="ctrl-editor"></textarea>
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              
            </div>
            <div class="row mb-4">
              <div class="col col-12 mb-3">
                <h4 class="sub-title">Social medial</h4>
              </div>
              
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" name="Blog_Facebook" value="" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" name="Blog_Twitter" value="" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" name="Blog_Instagram" value="" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Linkedin</label>
                  <input type="text" class="form-control" name="Blog_Linkedin" value="" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Casestudy_Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-12 mt-5">
                  <div class="text-center submit-div">
                    <button type="submit" class="grad-btn">Submit</button>
                  </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
@include('Components.js')
</body>
</html>