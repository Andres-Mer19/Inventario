    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/avatar.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?= $_SESSION['userData']['nombres']; ?></p>
          <p class="app-sidebar__user-designation"><?= $_SESSION['userData']['nombrerol']; ?></p>
        </div>
      </div>
      <ul class="app-menu">
        <?php if(!empty($_SESSION['permisos'][1]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][2]['r'])){ ?>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i> Usuarios</a></li>
                <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            </ul>
        </li>
        <?php } ?>
        
        
        <?php if(!empty($_SESSION['permisos'][3]['r'])){ ?>
         <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/clientes">
                <i class="app-menu__icon fa fa-user"></i>
                <span class="app-menu__label">Clientes</span>
            </a>
        </li>
        <?php } ?>
        
        <?php if(!empty($_SESSION['permisos'][4]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/proveedores">
                <i class="app-menu__icon fa fa-user-circle"></i>
                <span class="app-menu__label">Proveedores</span>
            </a>
        </li>
        <?php } ?>
        
        
        <?php if(!empty($_SESSION['permisos'][5]['r'])){ ?>
         <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/entradas">
                <i class="app-menu__icon fa fa-external-link-square"></i>
                <span class="app-menu__label">Entradas</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][6]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/merma">
                <i class="app-menu__icon fa fa-archive"></i>
                <span class="app-menu__label">Merma</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][7]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/qr">
                <i class="app-menu__icon fa fa fa-qrcode"></i>
                <span class="app-menu__label">Qr</span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($_SESSION['permisos'][8]['r'])){ ?>
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/pedidos">
                <i class="app-menu__icon fa fa-cart-plus"></i>
                <span class="app-menu__label">Pedidos</span>
            </a>
        </li>
        <?php } ?>


        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
                <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
                <span class="app-menu__label">Logout</span>
            </a>
        </li>
      </ul>

       
    </aside>