<div class="pcoded-content">
 <div class="pcoded-inner-content">
  <!-- Main-body start -->
  <div class="main-body">
   <div class="page-wrapper">
    <!-- Page-header start -->
    <div class="page-header">
     <div class="row align-items-end">
      <div class="col-lg-8">
       <div class="page-header-title">
        <div class="d-inline">
         <h4><?= $title; ?></h4>

        </div>
       </div>
      </div>
      <div class="col-lg-4">
       <div class="page-header-breadcrumb">
        <ul class="breadcrumb-title">
         <li class="breadcrumb-item">
          <a href="index-1.htm"> <i class="feather icon-home"></i>
          </a>
         </li>
         <li class="breadcrumb-item"><a href="#!"><?= $title; ?></a> </li>
        </ul>
       </div>
      </div>
     </div>
    </div>

    <!-- Page-header end -->

    <div class="page-body">
     <div class="row">
      <div class="col-sm-12">
       <div class="card">
        <div class="card-header">
         <h5><?= $title; ?></h5>

         <div class="card-header-right">
          <ul class="list-unstyled card-option">
           <li><i class="feather icon-maximize full-card"></i></li>
           <li><i class="feather icon-minus minimize-card"></i>
           </li>
           <li><i class="feather icon-trash-2 close-card"></i></li>
          </ul>
         </div>
        </div>
        <div class="card-block">
         <!-- Page Heading -->



         <div class="row">
          <div class="col-lg-6">
           <?= $this->session->flashdata('message'); ?>
           <form method="post" action="<?= base_url('user/changepassword'); ?>">
            <div class="form-group">
             <input type="password" class="form-control form-control-user" id="currentpassword" name="currentpassword" placeholder="Current Password" value="<?= set_value('email'); ?>">
             <?php echo form_error('currentpassword', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
             <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="password" class="form-control form-control-user" id="new_password1" name="new_password1" placeholder="Password">
              <?php echo form_error('new_password1', '<small class="text-danger pl-3">', '</small>'); ?>
             </div>
             <div class="col-sm-6">
              <input type="password" class="form-control form-control-user" id="new_password2" name="new_password2" placeholder="Repeat Password" value="<?= set_value('paswword2'); ?>">
             </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
             Save Change
            </button>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>