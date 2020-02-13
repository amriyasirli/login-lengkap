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
         <li class="breadcrumb-item"><a href="#!">Widget</a> </li>
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
         <?php echo form_error('roleaccess', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
         <!-- Pesan sukses -->
         <?= $this->session->flashdata('message'); ?>

         <table class="table table-hover">
          <h5>Role : <?= $role['role']; ?></h5>
          <thead>
           <th scope="col">#</th>
           <th scope="col">Role</th>
           <th scope="col">Access</th>
          </thead>
          <tbody>
           <?php $i = 1; ?>
           <?php foreach ($menu as $m) : ?>

            <tr>
             <th scope="row"><?= $i; ?> </th>
             <td><?= $m['menu']; ?></td>
             <td>
              <div class="form-check">
               <input type="checkbox" class="form-check-input" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
              </div>


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