<body class="fix-menu">
 <!-- Pre-loader start -->
 <div class="theme-loader">
  <div class="ball-scale">
   <div class='contain'>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
    <div class="ring">
     <div class="frame"></div>
    </div>
   </div>
  </div>
 </div>
 <!-- Pre-loader end -->
 <section class="login-block">
  <!-- Container-fluid starts -->
  <div class="container-fluid">
   <div class="row">
    <div class="col-sm-12">
     <form class="md-float-material form-material" method="post" action="<?= base_url('auth/registration'); ?>">
      <div class="text-center">
       <img src="<?= base_url(); ?>vendor/files/assets/images/logo.png" alt="logo.png">
      </div>
      <div class="auth-box card">
       <div class="card-block">
        <div class="row m-b-20">
         <div class="col-md-12">
          <h3 class="text-center txt-primary">Sign up</h3>
         </div>
        </div>
        <div class="form-group form-primary">
         <input type="text" name="name" id="name" class="form-control" placeholder="Choose Username" value="<?= set_value('name'); ?>">
         <span class="form-bar"></span>
         <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group form-primary">
         <input type="text" name="email" id="email" class="form-control" placeholder="Your Email Address" value="<?= set_value('email'); ?>">
         <span class="form-bar"></span>
         <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="row">
         <div class="col-sm-6">
          <div class="form-group form-primary">
           <input type="password" name="password1" id="password1" class="form-control" placeholder="Password">
           <span class="form-bar"></span>
           <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
          </div>
         </div>
         <div class="col-sm-6">
          <div class="form-group form-primary">
           <input type="password" name="password2" id="password2" class="form-control" placeholder="Confirm Password">
           <span class="form-bar"></span>
          </div>
         </div>
        </div>
        <div class="row m-t-25 text-left">
         <div class="col-md-12">
          <div class="checkbox-fade fade-in-primary">
           <label>
            <input type="checkbox" value="">
            <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
            <span class="text-inverse">I read and accept <a href="#">Terms &amp; Conditions.</a></span>
           </label>
          </div>
         </div>
        </div>
        <div class="row m-t-30">
         <div class="col-md-12">
          <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign up now</button>
         </div>
        </div>
        <hr>
        <div class="row">
         <div class="col-md-10">
          <p class="text-inverse text-left"><a href="<?= base_url('auth'); ?>"><b class="f-w-600">Back to Login</b></a></p>
         </div>
        </div>
       </div>
      </div>
     </form>
    </div>
    <!-- end of col-sm-12 -->
   </div>
   <!-- end of row -->
  </div>
  <!-- end of container-fluid -->
 </section>