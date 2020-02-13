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



         <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
         <table class="table table-hover">
          <thead>
           <th scope="col">#</th>
           <th scope="col">Role</th>
           <th scope="col">Action</th>
          </thead>
          <tbody>
           <?php $i = 1; ?>
           <?php foreach ($role as $r) : ?>

            <tr>
             <th scope="row"><?= $i; ?> </th>
             <td><?= $r['role']; ?></td>
             <td>
              <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="label label-success">
               Access
              </a>
              <a href="#" class="label label-warning">
               Edit
              </a>
              <a href="#" class="label label-danger">
               Delete
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
      <!-- /.container-fluid -->

     </div>
     <!-- End of Main Content -->


     <!-- Modal static-->
     <div class="modal fade" id="newRoleModal" name="newRoleModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
       <div class="modal-content">
        <div class="modal-header">
         <h4 class="modal-title">Add New Role</h4>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>
        <form action="<?= base_url('admin/role'); ?>" method="post">
         <div class="modal-body">

          <div class="form-group">
           <div class="col-sm-10">
            <input type="text" class="form-control" id="role" name="role" placeholder="Menu Role">
           </div>
          </div>

         </div>
         <div class="modal-footer">
          <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary waves-effect waves-light ">Add</button>
         </div>
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





<!-- Begin Page Content -->
<div class="container-fluid">

 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
 <div class="row">
  <div class="col-lg-6">

   <!-- Pesan Error -->
   <?php echo form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
   <!-- Pesan sukses -->
   <?= $this->session->flashdata('message'); ?>


   </li>
   <li>