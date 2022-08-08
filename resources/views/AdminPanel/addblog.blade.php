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
                  <input type="text" class="form-control" name="Title" value="{{old('Title')}}" placeholder="Enter blog title" />
                  <span class="text-danger">@error('Title') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Created By</label>
                  <input type="text" class="form-control" name="Created_by" value="{{old('Created_by')}}" placeholder="Enter author name" />
                  <span class="text-danger">@error('Created_by') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Images and Author Photo</label>
                  <div class="file-loading">
                    <input type="file" class="inputphoto" name="Images_Author_Photo" value="{{old('Images_Author_Photo')}}" multiple>
                  </div>
                  <span class="text-danger">@error('Images_Author_Photo') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-12">
                <div class="mb-4 form-group">
                  <label class="form-label">Blog Details</label>
                  <textarea class="ckeditor form-control" name="Details" value="{{old('Details')}}"></textarea>
                  <span class="text-danger">@error('Details') {{$message}} @enderror</span>
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
                  <input type="text" class="form-control" name="Facebook" value="{{old('Facebook')}}" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Facebook') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12 mb-3">
                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" name="Twitter" value="{{old('Twitter')}}" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Twitter') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" name="Instagram" value="{{old('Instagram')}}" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Instagram') {{$message}} @enderror</span>
                </div>
              </div>
              <div class="col col-md-6 col-12">
                <div class="form-group">
                  <label class="form-label">Linkedin</label>
                  <input type="text" class="form-control" name="Linkedin" value="{{old('Linkedin')}}" placeholder="Enter social media link" />
                  <span class="text-danger">@error('Linkedin') {{$message}} @enderror</span>
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
</x-layout>