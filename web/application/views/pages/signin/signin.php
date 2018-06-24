<link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.css') ?>">

<!-- <div class="text-center wrapper">
  <form class="form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>

</div> -->

<div class="signin-back">
  <dir class="signin-front">
    <div class="container-fluid" style="height:100%">
      <div class="row" style="height:100%">
        <div class="col-md-4"></div>
        <div class="col-md-4 login-cont-out">
          <div class="login-cont">
            <h1 class="login-heading">Login</h4>
            <?php echo form_open('/signin'); ?>
            <p style="text-align:center">
              <span class="input input--nao" style="margin-left:0;margin-right:0;font-weight:normal">
                <input class="input__field input__field--nao" name="login-user-name" type="text" id="login-user-name" />
                <label class="input__label input__label--nao" for="input-2">
                  <span class="input__label-content input__label-content--nao"><i class="fa fa-user"></i>&nbsp;User Name</span>
                </label>
                <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                  <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                </svg>
              </span>
            </p>
            <p style="text-align:center">
              <span class="input input--nao" style="margin-left:0;margin-right:0">
                <input class="input__field input__field--nao" name="login-user-password" type="password" id="login-user-password" />
                <label class="input__label input__label--nao" for="input-2">
                  <span class="input__label-content input__label-content--nao"><i class="fa fa-lock"></i>&nbsp;Password</span>
                </label>
                <svg class="graphic graphic--nao" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                  <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"/>
                </svg>
              </span>
            </p>
            <div class="error-cont">
              <?php echo validation_errors(); ?>
              <p class="error-text">
                <?php echo isset($signin_error) ? $signin_error : ''; ?>
              </p>
            </div>
            <p class="login-btn-cont">
              <button class="login-btn" type="submit" name="login-form">Log In</button>
            </p>
            </form>
          </div>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
  </dir>
</div>
