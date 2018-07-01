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
  <div class="signin-back-inner">
    <dir class="signin-front">
      <div class="signin-front-inner">
        <div class="container-fluid" style="height:100%">
          <div class="row" style="height:100%">
            <div class="col-md-4"></div>
            <div class="col-md-4 login-cont-out">
              <div class="login-cont">
                <div>
                  <img src="<?php echo base_url('assets/img/logo_2.png') ?>" style="width:200px" class="img-resp" alt="">
                  <br>
                </div>
                <!-- <h1 class="login-heading">Login</h4> -->
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
                <div class="error-cont" id="login-error-cont">
                  <?php echo validation_errors(); ?>
                  
                    <?php echo isset($signin_error) ? '<p class="error-text">'.$signin_error.'</p>' : ''; ?>
                  
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
      </div>
      
    </dir>
  </div>
  <script src="<?php echo base_url('assets/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/textFields/classie.js'); ?>"></script>
  <script>
			(function() {
				// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
				if (!String.prototype.trim) {
					(function() {
						// Make sure we trim BOM and NBSP
						var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
						String.prototype.trim = function() {
							return this.replace(rtrim, '');
						};
					})();
				}

				[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
					// in case the input is already filled..
					if( inputEl.value.trim() !== '' ) {
						classie.add( inputEl.parentNode, 'input--filled' );
					}

					// events:
					inputEl.addEventListener( 'focus', onInputFocus );
					inputEl.addEventListener( 'blur', onInputBlur );
				} );

				function onInputFocus( ev ) {
					classie.add( ev.target.parentNode, 'input--filled' );
				}

				function onInputBlur( ev ) {
					if( ev.target.value.trim() === '' ) {
						classie.remove( ev.target.parentNode, 'input--filled' );
					}
				}
			})();

      $(document).ready(function(){
        $('#login-user-name,#login-user-password').on('keypress',function(){
          $('#login-error-cont').html('');
        });
      });

		</script>
</div>
