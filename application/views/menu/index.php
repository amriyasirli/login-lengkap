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
          <div class="col-lg-6">

           <!-- Pesan Error -->
           <?php echo form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
           <!-- Pesan sukses -->
           <?= $this->session->flashdata('message'); ?>

           <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add new menu</a>
           <table class="table table-hover">
            <thead>
             <th scope="col">#</th>
             <th scope="col">Menu</th>
             <th scope="col">Action</th>
            </thead>
            <tbody>
             <?php $i = 1; ?>
             <?php foreach ($menu as $m) : ?>

              <tr>
               <th scope="row"><?= $i; ?> </th>
               <td><?= $m['menu']; ?></td>
               <td>
                <a href="" class="btn btn-info btn-outline-info btn-icon"><i class="icofont icofont-edit"></i></a>
                <a href="" class="btn btn-danger btn-outline-danger btn-icon"><i class="icofont icofont-trash"></i></a>
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





  <!-- Begin Page Content -->
  <div class="container-fluid">

   <!-- Page Heading -->




  </div>
  <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content -->


 <!-- Modal static-->
 <div class="modal fade" id="newMenuModal" name="newMenuModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
    <div class="modal-header">
     <h4 class="modal-title">Add New Menu</h4>
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
    <form action="<?= base_url('menu'); ?>" method="post">
     <div class="modal-body">

      <div class="form-group">
       <div class="col-sm-10">
        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
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