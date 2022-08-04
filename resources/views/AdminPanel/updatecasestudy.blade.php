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
                <h3>Add / Update Case Study</h3>
              </div>
            </div>
            <div class="col col-6">
              <div class="text-end"> <a href="{{route('casestudylist')}}" class="grad-btn grad-btn-color"> Back </a> </div>
            </div>
          </div>
          <form action="{{route('updatingcasestudy')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Title</label>
                  <input type="text" class="form-control" name="Casestudy_Title" value="" placeholder="Enter blog title" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Created By</label>
                  <input type="text" class="form-control" name="Casestudy_Created_by" value="" placeholder="Enter author name" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Type</label>
                  <input type="text" class="form-control" name="Casestudy_Type" value="" placeholder="Enter blog type" />
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Images and Author Photo</label>
                  <div class="file-loading">
                    <input type="file" class="inputphoto" name="Casestudy_Images_Author_Photo" multiple>
                  </div>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Details</label>
                  <textarea class="form-control editor-ctrl" name="Casestudy_Details" id="ctrl-editor"></textarea>
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
                  <input type="text" class="form-control" name="Casestudy_Facebook" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" name="Casestudy_Twitter" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" name="Casestudy_Instagram" value="" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Linkedin</label>
                  <input type="text" class="form-control" name="Casestudy_Linkedin" value="" placeholder="Enter social media link" />
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