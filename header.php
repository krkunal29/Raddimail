<header style="background-color: khaki;">
  <div class="container ">
    <!-- hidden top area toggle link -->
    <div id="header-hidden-link">
      <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
    </div>
    <!-- end toggle link -->
    <div class="row nomargin">
      <div class="span12">
        <div class="headnav">
          <ul>
            <li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> Sign up</a></li>
            <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>
          </ul>
        </div>
        <!-- Signup Modal -->
        <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                  <input type="text" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputSignupPassword">Password</label>
                <div class="controls">
                  <input type="password" id="inputSignupPassword" placeholder="Password">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                <div class="controls">
                  <input type="password" id="inputSignupPassword2" placeholder="Password">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Sign up</button>
                </div>
                <p class="aligncenter margintop20">
                  Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                </p>
              </div>
            </form>
          </div>
        </div>
        <!-- end signup modal -->
        <!-- Sign in Modal -->
        <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="control-group">
                <label class="control-label" for="inputText">Username</label>
                <div class="controls">
                  <input type="text" id="inputText" placeholder="Username">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputSigninPassword">Password</label>
                <div class="controls">
                  <input type="password" id="inputSigninPassword" placeholder="Password">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Sign in</button>
                </div>
                <p class="aligncenter margintop20">
                  Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                </p>
              </div>
            </form>
          </div>
        </div>
        <!-- end signin modal -->
        <!-- Reset Modal -->
        <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal">
              <div class="control-group">
                <label class="control-label" for="inputResetEmail">Email</label>
                <div class="controls">
                  <input type="text" id="inputResetEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn">Reset password</button>
                </div>
                <p class="aligncenter margintop20">
                  We will send instructions on how to reset your password to your inbox
                </p>
              </div>
            </form>
          </div>
        </div>
        <!-- end reset modal -->
      </div>
    </div>
    <div class="row">
      <div class="span4">
        <div class="logo">
          <a href="index.php"><img src="img/logo.jpg" alt="" class="logo" /></a


        </div>
      </div>
      <div class="span8">
        <div class="navbar navbar-static-top">
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <!--  class="icon-angle-down"-->
                  <a href="index.php">Home <i></i></a>
                  <!-- <ul class="dropdown-menu">
                    <li><a href="index-alt2.html">Homepage 2</a></li>
                    <li><a href="index-alt3.html">Homepage 3</a></li>
                  </ul> -->
                </li>
                <li class="dropdown">
                  <a href="about.php">About us<i></i></a>

                </li>
                <li >
                  <a href="whyus.php">Why Us ?</a>
                </li>
                <li >
                  <a href="cost.php">Price</a>
                </li>

                <li>
                  <a href="contact.php">Contact </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end navigation -->
        </div>
      </div>
    </div>
  </div>
</header>
