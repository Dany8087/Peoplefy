<header>
    <div class="header-left">
        <h2><span>Admin</span></h2>
        <ul>
          <li>Home <i class="fas fa-angle-right"></i></li>
          <li><a class="active">Dashboard</a></li>
        </ul>

    </div>
    <div class="header-right">
      <ul>
        <!-- <li><a href=""><i class="fas fa-search"></i></a></li>
        <li><a href=""><i class="fas fa-cog"></i></a></li> 
        <li class="dropdown notoi-li">
          <a class="dropdown-toggle" id="dropdownNotification" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell"></i></a>
                      <ul class="dropdown-menu nofify-ul" aria-labelledby="dropdownNotification">
                      <li class="title-li">Notification</li>  
                      <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="noti-left">
                              <span class="sp-1"><i class="far fa-comment-dots"></i></span>
                            </div>
                            <div class="noti-right">
                              <span>04:10 PM</span>
                              <h4>Lorem ipsum</h4>
                              <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="noti-left">
                              <span class="sp-2"><i class="far fa-comment-dots"></i></span>
                            </div>
                            <div class="noti-right">
                            <span>03:10 PM</span>
                              <h4>Lorem ipsum</h4>
                              <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="noti-left">
                              <span class="sp-3"><i class="far fa-comment-dots"></i></span>
                            </div>
                            <div class="noti-right">
                              <span>01:10 PM</span>
                              <h4>Lorem ipsum</h4>
                              <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="noti-left">
                              <span class="sp-4"><i class="far fa-comment-dots"></i></span>
                            </div>
                            <div class="noti-right">
                              <span>12:10 PM</span>
                              <h4>Lorem ipsum</h4>
                              <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="noti-left">
                              <span class="sp-5"><i class="far fa-comment-dots"></i></span>
                            </div>
                            <div class="noti-right">
                              <span>11:10 AM</span>
                              <h4>Lorem ipsum</h4>
                              <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                          </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <div class="noti-left">
                            <img src="images/avatar-s-1.png" alt="user photo" />
                            </div>
                            <div class="noti-right">
                              <span>11:10 AM</span>
                              <h4>Lorem ipsum</h4>
                              <p>Lorem ipsum dolor sit amet consectetur</p>
                            </div>
                          </a>
                        </li>
                      </ul>
        </li>-->
        <li class="img-li dropdown">
          <a class="dropdown-toggle" id="dropdownProfile" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('images/vector.jpg')}}" alt="user photo" /></a>
                      <ul class="dropdown-menu profile-ul" aria-labelledby="dropdownProfile">
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user"></i> My Profile</a></li>
                        <!-- <li><a class="dropdown-item" href="#"><i class="fas fa-envelope-open-text"></i> Inbox</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Account Setting</a></li> -->
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                      </ul>
        </li>
      </ul>

    </div>
  </header>