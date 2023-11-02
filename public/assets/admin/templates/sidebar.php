 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/images/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">SONLINE</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo _WEB_HOST_ADMIN_TEMPLATE ?>/images/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Duy Kiên (SUPER ADMIN)</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                 <!-- 
                Tổng quan - begin
                 -->
                 <li class="nav-item">
                     <a href="<?php echo _WEB_HOST_ROOT_ADMIN ?>" class="nav-link <?php echo (activeMenuSidebar('')) || empty($_GET['module']) ? 'active' : false ?>">
                         <i class="nav-icon fa fa-tachometer-alt"></i>
                         <p>
                             Tổng quan
                         </p>
                     </a>
                 </li>

                 <!-- 
                    Tổng quan - end
                 -->

                 <!-- 
                    Services - begin 
                -->
                 <li class="nav-item has-treeview <?php echo (activeMenuSidebar('services')) ? 'menu-open' : false ?>">
                     <a href="#" class="nav-link <?php echo (activeMenuSidebar('services')) ? 'active' : false ?>">
                         <i class="nav-icon fab fa-servicestack"></i>
                         <p>
                             Quản lý dịch vụ
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="?module=services" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Danh sách</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="?module=services&action=add" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Thêm mới</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <!-- 
                    Services -end 
                -->
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <div class="content-wrapper">