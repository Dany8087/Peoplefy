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
        <div class="row mb-4 align-items-center">
          <div class="col col-6">
            <div class="ap-com sm-com-heading">
               <h3>Case Study List</h3>
            </div>
          </div>
          <div class="col col-6">
            <div class="text-end">
              <a href="{{route('addcasestudy')}}" class="grad-btn grad-btn-color">Add Case Study</a>
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
                      <th scope="col" class="text-center"> Image</th>
                      <th scope="col">Case Study Title</th>
                      <th scope="col"> Created By</th>
                      <th scope="col">Created Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($casestudy as $items)
                  <tr>
                      <td class="text-center">{{$items['id']}}</td>
                      <td class="text-center"><img src="{{ Storage::url($items->Images_Author_Photo) }}" alt="" class="td_blog_img" /></td>
                      <td>{{$items['Title']}}</td>
                      <td>{{$items['Created_by']}}</td>
                      <td>{{$items['created_at']}}</td>
                      <td>
                          <div class="dropdown action-div">
                            <div class="dropdown-toggle no-toggle-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="fas fa-ellipsis-v"></i>
                            </div>
                            <!--//dropdown-toggle-->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{'casestudydetails/'.$items['id']}}"><i class="fas fa-eye"></i> View</a></li>
                              <li><a class="dropdown-item" href="{{'updatecasestudy/'.$items['id']}}"><i class="fas fa-pencil-alt"></i> Edit</a></li>
                              <!-- <li><hr class="dropdown-divider"></li> -->
                              <li><a class="dropdown-item" href="{{'deletecasestudy/'.$items['id']}}"><i class="fas fa-trash-alt"></i> Delete</a></li>
                            </ul>
                          </div>
                      </td>
                    </tr>
                    @endforeach    
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
</x-layout>