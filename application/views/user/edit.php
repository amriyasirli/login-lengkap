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
            <div class="col-lg-6">
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



                  <?php echo form_open_multipart('user/edit'); ?>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="emai" name="email" value="<?= $user['email']; ?>" for="email" placeholder="Full Name" readonly>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" name="name" value="<?= $user['name']; ?>" for="name" placeholder="Email Address">
                    <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="col-sm-3">
                          <img src="<?= base_url('assets/img/profil/') . $user['image']; ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label" for="image">Choose File</label>
                          </div>
                        </div>
                      </div>
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
</div>