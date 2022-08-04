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
    <div class="ap-com content-manger"> 
      <!-- header start -->
      @include('Components.header')
      <div class="ap-com container-main" style="background-image:url(images/bg_sm.png);">
        <div class="row mb-4 align-items-center">
          <div class="col col-6">
            <div class="ap-com sm-com-heading">
               <h3>Blog List</h3>
            </div>
          </div>
          <div class="col col-6">
            <div class="text-end">
              <a href="{{route('addblog')}}" class="grad-btn grad-btn-color">Add Blog</a>
            </div>
          </div>
        </div>
        
        <div class="ap-com">
          <div class="row">
            <div class="col col-12">
              <div class="table-responsive table-panel">
                <table class="table table-bordered align-middle ven-table">
                  <thead>
                    <tr>
                      <th scope="col">Sr.No</th>
                      <th scope="col" class="text-center">Blog Image</th>
                      <th scope="col">Blog Title</th>
                      <th scope="col">Blog Type</th>
                      <th scope="col">Blog Created By</th>
                      <th scope="col">Blog Created Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td class="text-center">1</td>
                      <td class="text-center"><img src="images/blog-imgs/blog-img1.jpg" alt="" class="td_blog_img" /></td>
                      <td>Sunt in culpa qui officia deserunt mollit animed kyest laborum</td>
                      <td>Career guidance</td>
                      <td>animed kyest</td>
                      <td>Sep 02</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('blogdetails')}}"><i class="fas fa-eye"></i> View</a></li>
                              <li><a class="dropdown-item" href="{{route('updateblog')}}"><i class="fas fa-pencil-alt"></i> Edit</a></li>
                              <!-- <li><hr class="dropdown-divider"></li> -->
                              <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="text-center">2</td>
                      <td class="text-center"><img src="images/blog-imgs/blog-img2.jpg" alt="" class="td_blog_img" /></td>
                      <td>Sunt in culpa qui officia deserunt mollit animed kyest laborum</td>
                      <td>Career guidance</td>
                      <td>animed kyest</td>
                      <td>Sep 02</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('blogdetails')}}"><i class="fas fa-eye"></i> View</a></li>
                              <li><a class="dropdown-item" href="{{route('updateblog')}}"><i class="fas fa-pencil-alt"></i> Edit</a></li>
                              <!-- <li><hr class="dropdown-divider"></li> -->
                              <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">3</td>
                      <td class="text-center"><img src="images/blog-imgs/blog-img3.jpg" alt="" class="td_blog_img" /></td>
                      <td>Sunt in culpa qui officia deserunt mollit animed kyest laborum</td>
                      <td>Career guidance</td>
                      <td>animed kyest</td>
                      <td>Sep 02</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('blogdetails')}}"><i class="fas fa-eye"></i> View</a></li>
                              <li><a class="dropdown-item" href="{{route('updateblog')}}"><i class="fas fa-pencil-alt"></i> Edit</a></li>
                              <!-- <li><hr class="dropdown-divider"></li> -->
                              <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>

                    <tr>
                      <td class="text-center">4</td>
                      <td class="text-center"><img src="images/blog-imgs/blog-img4.jpg" alt="" class="td_blog_img" /></td>
                      <td>Sunt in culpa qui officia deserunt mollit animed kyest laborum</td>
                      <td>Career guidance</td>
                      <td>animed kyest</td>
                      <td>Sep 02</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{route('blogdetails')}}"><i class="fas fa-eye"></i> View</a></li>
                              <li><a class="dropdown-item" href="{{route('updateblog')}}"><i class="fas fa-pencil-alt"></i> Edit</a></li>
                              <!-- <li><hr class="dropdown-divider"></li> -->
                              <li><a class="dropdown-item" href="#"><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
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