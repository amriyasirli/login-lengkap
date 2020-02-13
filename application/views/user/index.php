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

                <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="content social-timeline">
                                <div class="">
                                    <!-- Row Starts -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- Social wallpaper start -->
                                            <div class="social-wallpaper">
                                                <img src="<?= base_url('vendor/') ;?>files\assets\images\social\wallpaper.jpg" class="img-fluid width-100" alt="">
                                            </div>
                                            <!-- Social wallpaper end -->
                                            <!-- Timeline button start -->
                                            <div class="timeline-btn">
                                                <a href="https://www.instagram.com/amri_yassirli/" class="btn btn-primary waves-effect waves-light m-r-10">instagram</a>
                                                <a href="https://www.youtube.com/channel/UCQn9wGIj-sWX_uoiHT11eXw" class="btn btn-primary waves-effect waves-light">Youtube</a>
                                            </div>
                                            <!-- Timeline button end -->
                                        </div>
                                    </div>
                                    <!-- Row end -->
                                    <!-- Row Starts -->
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-4 col-xs-12">
                                            <!-- Social timeline left start -->
                                            <div class="social-timeline-left">
                                                <!-- social-profile card start -->
                                                <div class="card">
                                                    <div class="social-profile">
                                                        <img class="img-fluid width-100" src="<?= base_url('assets/img/profil/') . $user['image']; ?>" alt="">
                                                    </div>
                                                    <div class="card-block social-follower">
                                                        <h4><b><?= $user['name']; ?></b></h4>
                                                        <h5><?= $user['email']; ?></h5>
                                                        <div class="row follower-counter">
                                                            <div class="col-4">
                                                                <button class="btn btn-primary btn-icon" data-toggle="tooltip" data-placement="top" title="485"><i class="icofont icofont-user-alt-3"></i></button>
                                                            </div>
                                                            <div class="col-4">
                                                                <button class="btn btn-danger btn-icon" data-toggle="tooltip" data-placement="top" title="2k"><i class="icofont icofont-like"></i></button>
                                                            </div>
                                                            <div class="col-4">
                                                                <button class="btn btn-success btn-icon" data-toggle="tooltip" data-placement="top" title="90"><i class="icofont icofont-eye-alt"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="">
                                                            <button type="button" class="btn btn-outline-primary waves-effect btn-block"><i class="icofont icofont-ui-user m-r-10"></i> Add as Friend</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- social-profile card end -->
                                                <!-- Who to follow card start -->
                                                <!-- Who to follow card end -->
                                                <!-- Friends card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text d-inline-block">Friends</h5>
                                                        <!-- <span class="friend-more f-right">see 12 more</span> -->
                                                        <span class="label label-primary f-right"> See 12 More </span>
                                                    </div>
                                                    <div class="card-block friend-box">
                                                        <img class="media-object img-radius" src="<?= base_url('assets/img/profil/') . $user['image']; ?>" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-2.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-3.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-4.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-1.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-4.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-3.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                        <img class="media-object img-radius" src="<?= base_url('vendor/') ;?>files\assets\images\avatar-2.jpg" alt="" data-toggle="tooltip" data-placement="top" title="user image">
                                                    </div>
                                                </div>
                                                <!-- Friends card end -->
                                            </div>
                                            <!-- Social timeline left end -->
                                        </div>
                                        <div class="col-xl-9 col-lg-8 col-md-8 col-xs-12 ">
                                            <!-- Nav tabs -->
                                            <div class="card social-tabs">
                                                <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#about" role="tab">About</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#photos" role="tab">Photos</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#friends" role="tab">Friends</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <!-- About tab start -->
                                                <div class="tab-pane active" id="about">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">Profil</h5>
                                                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                                                <i class="icofont icofont-edit"></i>
                                                            </button>
                                                                </div>
                                                                <div class="card-block">
                                                                    <div id="view-info" class="row">
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <form>
                                                                                <table class="table table-responsive m-b-0">
                                                                                    <tr>
                                                                                        <th class="social-label b-none p-t-0">Full Name
                                                                                        </th>
                                                                                        <td class="social-user-name b-none p-t-0 text-muted"><?= $user['name']; ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">E-mail</th>
                                                                                        <td class="social-user-name b-none text-muted"><?= $user['email']; ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Member Since</th>
                                                                                        <td class="social-user-name b-none text-muted"><?= date('d F Y', $user['data_created']); ?></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none">Role</th>
                                                                                        <?php if($user['role_id']==1) :?>
                                                                                        
                                                                                           <td class="social-user-name b-none text-muted">Admin</td>;
                                                                                        
                                                                                        <?php else :?>
                                                                                            <td class="social-user-name b-none text-muted">Member</td>";
                                                                                        

                                                                                        <?php endif ;?>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <th class="social-label b-none p-b-0">Location</th>
                                                                                        <td class="social-user-name b-none p-b-0 text-muted">New York, USA</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div id="edit-info" class="row">
                                                                        <div class="col-lg-12 col-md-12">
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
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="card">
                                                                <div class="card-header">
                                                                    <h5 class="card-header-text">Change Password</h5>
                                                                    <button id="edit-Contact" type="button" class="btn btn-primary waves-effect waves-light f-right">
                                                                <i class="icofont icofont-edit"></i>
                                                            </button>
                                                                </div>
                                                                <div class="card-block">
                                                                    <div id="contact-info" class="row">
                                                                        <div class="col-lg-6 col-md-12">
                                                                            <table class="table table-responsive m-b-0">
                                                                                <tr> 
                                                                                    <th class="social-label b-none">Password</th>

                                                                                    <?php if($user['password']!=1) :?>
                                                                                    <td class="social-user-name b-none text-muted">$%^&*#@!?+</td>

                                                                                    <?php else :?>
                                                                                        <td class="social-user-name b-none text-muted">Password tidak valid</td>
                                                                                </tr>
                                                                                <?php endif ; ?>

                                                                                <tr>
                                                                                    <i><th class="social-label b-none p-t-0">Note</th>
                                                                                    <td class="social-user-name b-none p-t-0 text-muted">Minimal 6 karakter</td></i>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                    <div id="edit-contact-info" class="row">
                                                                        <div class="col-lg-12 col-md-12">
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
                                                <!-- About tab end -->
                                                <!-- Photos tab start -->
                                                
                                                <!-- Photos tab end -->
                                                <!-- Friends tab start -->
                                                
                                                </div>
                                                <!-- Friends tab end -->
                                            </div>
                                            <!-- Row end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-body end -->