<div class="pcoded-wrapper">
  <nav class="pcoded-navbar">
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT      user_menu. id ,  menu 
                    FROM      user_menu  JOIN  user_access_menu 
                    ON        user_menu . id  =  user_access_menu . menu_id 
                    WHERE     user_access_menu . role_id  = $role_id
                    ORDER BY  user_access_menu . menu_id  ASC
                ";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>


    <ul class="pcoded-item pcoded-left-item">
    </ul>
    <hr>
    <hr>
    <div class="pcoded-inner-navbar main-menu">
      <!-- LOOPING menu -->
      <?php foreach ($menu as $m) : ?>

        <ul class="pcoded-item pcoded-left-item">
          <div class="pcoded-navigatio-lavel"><?= $m['menu']; ?></div>



          <!-- JOIN tabel -->
          <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
              FROM user_sub_menu WHERE menu_id = $menuId AND is_active = 1";


            // $querySubMenu = "SELECT *
            //         FROM user_sub_menu JOIN user_menu
            //         ON   user_sub_menu. menu_id = user_menu. id
            //         WHERE user_sub_menu. menu_id = $menuId
            //         AND  user_sub_menu. is_active = 1

            //         ";

            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>
          <?php foreach ($subMenu as $sm) : ?>

            <?php if ($title == $sm['title']) : ?>

              <li class="active">
              <?php else : ?>
              <li class="">
              <?php endif; ?>

              <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                <span class="pcoded-micon"><i class="<?= $sm['icon']; ?>"></i></span>
                <span class="pcoded-mtext"><?= $sm['title']; ?></span>
              </a>

            <?php endforeach; ?>
        </ul>


        <ul class="pcoded-item pcoded-left-item">
        </ul>


      <?php endforeach; ?>
    </div>
  </nav>


  <!-- Nav Item - Dashboard -->


  <!-- Divider -->