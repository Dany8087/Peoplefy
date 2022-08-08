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
                  <input type="text" class="form-control" name="Title" value="{{$casestudy->Title}}" placeholder="Enter blog title" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Created By</label>
                  <input type="text" class="form-control" name="Created_by" value="{{$casestudy->Created_by}}" placeholder="Enter author name" />
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Images and Author Photo</label>
                  <div class="file-loading">
                    <input type="file" class="inputphoto" name="Images_Author_Photo" value="{{$casestudy->Images_Author_Photo}}" multiple>
                  </div>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Case Study Details</label>
                  <textarea class="ckeditor form-control" name="Details" value="{{$casestudy->Details}}"></textarea>
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
                  <input type="text" class="form-control" name="Facebook" value="{{$casestudy->Facebook}}" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" name="Twitter" value="{{$casestudy->Twitter}}" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" name="Instagram" value="{{$casestudy->Instagram}}" placeholder="Enter social media link" />
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Linkedin</label>
                  <input type="text" class="form-control" name="Linkedin" value="{{$casestudy->Linkedin}}" placeholder="Enter social media link" />
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
</x-layout>