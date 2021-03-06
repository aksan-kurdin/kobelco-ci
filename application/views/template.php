<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>KOBELCO | <?= $judul; ?> </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="<?= base_url() ?>template/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="<?= base_url() ?>template/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
        <link rel="stylesheet" href="<?= base_url() ?>template/ionicons-2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!-- -----------------javascript -->
        <script src="<?= base_url('assets/js/jquery-1.11.2.min.js'); ?>"></script>
        <!-- DataTables -->
        <script src="<?= base_url('assets/datatables/jquery.dataTables.js'); ?>"></script>
        <script src="<?= base_url('assets/datatables/dataTables.bootstrap.js'); ?>"></script>

        <!-- Bootstrap 3.3.5 -->
        <script src="<?= base_url() ?>template/bootstrap/js/bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="<?= base_url() ?>template/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="<?= base_url() ?>template/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url() ?>template/dist/js/app.min.js"></script>
        <!--------------------- End javascript -->

        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>

       
    </head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>DK</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>DAYA KOBELCO </b></span>
                </a>
                
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">

                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= base_url()?>template/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Admin</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= base_url()?>template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        <p>
                                            Ivan Rivani - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>

                                    <!-- Menu Body -->
                                    <li class="user-body">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </li>

                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <?php
                                            echo anchor('auth/logout','Sign Out',array('class'=>'btn btn-default btn-flat'));
                                            ?>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                            <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?= base_url()?>template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>Admin</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                        <!-- <form action="#" method="get" class="sidebar-form">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form> -->
                    <!-- /.search form -->
    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">

                        <!-- <li>
                            <a href="#">
                                <i class="fa fa-laptop"></i> <span>DASHBOARD</span>
                                <small class="label pull-right bg-red">0</small>
                            </a>
                        </li> -->

                        <?php

                        $menu = $this->db->get_where( 'menu', array('is_parent' => 0,'is_active'=>1));

                        foreach ($menu->result() as $m) {
                            // chek ada sub menu
                            $submenu = $this->db->get_where('menu',array('is_parent'=>$m->id,'is_active'=>1));
                            if($submenu->num_rows()>0){
                                // tampilkan submenu
                                echo "<li class='treeview'>
                                    ".anchor('#',  "<i class='$m->icon'></i>".strtoupper($m->name).' <i class="fa fa-angle-left pull-right"></i>')."<ul class='treeview-menu'>";
                                foreach ($submenu->result() as $s){
                                     echo "<li>" . anchor($s->link, "<i class='$s->icon'></i> <small class='label pull-right bg-red'>5</small><span>" . strtoupper($s->name)) . "</span></li>";
                                }
                                   echo"</ul>
                                    </li>";
                            }else{
                                echo "<li>" . anchor($m->link, "<i class='$m->icon '></i> <small class='label pull-right bg-red'>0</small><span>" . strtoupper($m->name)) . "</span></li>";
                            }
                            
                        }
                        ?>

                    </ul>
                </section>
                <!-- /.sidebar -->
    
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        LIST PARTS CLEARANCE
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> <?= $judul; ?></a></li>
                        <!-- <li><a href="#">Tables</a></li> -->
                        <!-- <li class="active"><?php 
                            // $crumbs= explode("/", $_SERVER['REQUEST_URI']); 
                            //  echo  ucfirst($crumbs[2]);
                            ?>
                        </li> -->
                    </ol>
                </section>

        <!-- Main Content -->
        <section class='content'>
            <div class='row'>
                <div class='col-xs-12'>
                    <div class='box'>

                                <?= $render;  ?>

                </div><!-- /.col -->
            </div><!-- /.row -->
        </section><!-- /.content -->
        <!-- End Main Content -->


            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; 2020 <a href="#">Ivan Rivani</a>.</strong> All rights reserved.
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->



    </body>
</html>

