   
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
   <!-- Sidebar Menu -->
	 <?php	if 	(($_COOKIE["userid_rol"]) == 2 ) { ?>

   <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?= base_url("admin/dashboard") ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Principal</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/products") ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Productos</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/orders") ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Ordenes</p>
            </a>
					
          </li>
				
          <li class="nav-item">
            <a href="<?= base_url("admin/logout") ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Salir</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

 
		<?php	 }  elseif (($_COOKIE["userid_rol"]) == 1 )  {  ?>
		<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
		 
			<li class="nav-item">
			<a href="<?= base_url("test_api") ?>" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>zona encargado</p>
				</a>
				</li>
			<li class="nav-item">
				<a href="<?= base_url("admin/logout") ?>" class="nav-link">
					<i class="nav-icon fas fa-th"></i>
					<p>Salir</p>
				</a>
			</li>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

<?php		}   ?>

			

                
