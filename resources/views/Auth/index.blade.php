<!DOCTYPE html>
<html lang="en">
<head>
@include('components.css')
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top" data-gr-c-s-loaded="true">
<!-- loader -->
<div class="wrapper"> 
  <div class="login-contianer"> 
    <div class="container">
      <div class="row justify-content-center">
        <div class="col col-xl-4 col-lg-6 col-md-7 col-12">
          <div class="login-box">
            <div class="vennplay-logo text-center mb-5">
              <img src="images/logo.png" alt="vennplay logo" />
            </div>
            <div class="login-form">
              <form action="/Peoplefy" method="post">
                @csrf
                <div class="mb-4 form-group">
                  <label for="exampleFormControlInput1" class="form-label">Username / Email</label>
                  <input type="text" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-4 form-group">
                  <label for="exampleFormControlInput2" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" id="exampleFormControlInput2" placeholder="********">
                </div>

                <div class="submit-btn-div mt-5 text-center">
                  <button type="submit" class="grad-btn">Log In</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center foot-p">
    <p>© Vennplay 2021</p>
  </div>
</div>

<!-- jQuery -->
@include('components.js')

</body>
</html>
 