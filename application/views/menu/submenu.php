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
                  <!-- Pesan Error -->
                  <?php echo form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                  <!-- Pesan sukses -->
                  <?= $this->session->flashdata('message'); ?>
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




                  <div class="row">
                    <div class="col-lg">


                      <!-- Pesan Error -->
                      <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                        </div>
                      <?php endif; ?>
                      <!-- Pesan sukses -->
                      <?= $this->session->flashdata('message'); ?>

                      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add Submenu</a>
                      <div class="card-block">
                        <div class="table-responsive">
                          <table class="table table-xs">
                            <thead>
                              <th scope="col">#</th>
                              <th scope="col">Title</th>
                              <th scope="col">Menu</th>
                              <th scope="col">Url</th>
                              <th scope="col">icon</th>
                              <th scope="col">Active</th>
                              <th scope="col">Action</th>
                            </thead>
                            <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($subMenu as $sm) : ?>

                                <tr>
                                  <td><?= $i; ?> </td>
                                  <td><?= $sm['title']; ?></td>
                                  <td> <?= $sm['menu']; ?></td>
                                  <td><?= $sm['url']; ?></td>
                                  <td><?= $sm['icon']; ?></td>
                                  <td>
                                    <div class="dropdown no-arrow">

                                      <?php if ($sm['is_active'] == 1) : ?>

                                        <label class="badge badge-success">Yes</label>

                                      <?php else : ?>

                                        <label class="badge badge-danger">No</label>

                                      <?php endif; ?>

                                      <form action="<?= base_url('menu/active'); ?>" method="post">
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                          <a class="dropdown-item" href="#">active</a>
                                          <a class="dropdown-item" href="#">non active</a>
                                        </div>
                                      </form>
                                    </div>
                                  </td>
                                  <td>
                                    <a href="<?= base_url('menu/submenu_edit/') . $sm['id']; ?>" class="btn-sm btn-info" data-toggle="modal" data-target="#editSubMenuModal">
                                      <i class="icofont icofont-edit"></i>
                                    </a>
                                    <a href="#" class="btn-sm btn-danger">
                                      <i class="icofont icofont-trash"></i>
                                    </a>

                                  </td>
                                </tr>
                                <?php $i++; ?>
                              <?php endforeach; ?>

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
        </div>








        <!-- Modal Add-->
        <div class="modal fade" id="newSubMenuModal" name="newSubMenuModal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Add New Submenu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="<?= base_url('menu/subMenu'); ?>" method="post">
                <div class="modal-body">
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="title" name="title" placeholder="Menu name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <select class="form-control" id="menu_id" name="menu_id">
                        <option value="">Select Menu</option>
                        <?php foreach ($menu as $m) : ?>

                          <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>

                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="url" name="url" placeholder="Menu url">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="icon" name="icon" placeholder="Menu icon">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <div class="form-check">
                        <input class="form-check-input ml-1" type="checkbox" value="1" class="form-control" id="is_active" name="is_active" checked>
                        <label class="form-check-label ml-1" for="is_active"> Submenu Active ?</label>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
                  </div>
              </form>
              </>
            </div>
          </div>

        </div>