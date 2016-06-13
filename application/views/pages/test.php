<!DOCTYPE html>
<html>
  <head>
    <title>BHARATBHUTAN :: Home</title>
    <?php $this->load->view('include/css_common'); ?>
    <style>
     #navigation{
       /*display: none;*/
       position: relative;
       width: 100%;
       height: 100%;
      border-bottom: 2px solid #fff;
      overflow-y: auto;
     }
     .nav-menus{
       margin-top: 70px;
       list-style: none;
       text-align: center;
              padding: 0;
     }
     ul.nav-menus  li{
       text-decoration: none;
       font-size: 18px;
     }
     ul.nav-menus  li:hover{
       background: #efefef;
     }
     ul.nav-menus  a{
       text-decoration:none;
       font-weight: bold;
       color: #666;
     }
     ul.nav-menus  a:hover{
       color: #00F;
       border-bottom: 1px solid brown;

     }
     .navigation-backdrop{
       display: none;
       background: rgba(255, 255, 255, 0.9);
       position: fixed;
       height: 100%;
       width: 100%;
       z-index: 4000;

     }
     .close-menu{
       position: absolute;
       top: 20px;
       right: 17px;
       font-size: 36px;
       color: #333;
       opacity: 1;
     }
     .close-menu:hover{
       color: #ddd;
     }
     .hamburger{
       margin-top: 12px;
       cursor: pointer;
     }
     .hamburger:hover{
       opacity: 0.6;
     }
    .hamburger .hamburger-label{
       font-size: 16px;
       height: 40px;
       float: left;
     }
    </style>
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="f8-nav-container container">
        <div class="nav-container">
            <span class="hamburger pull-right" onclick="toggleNavgation()">
              <div class="hamburger-label">MENU</div>
              <img src="<?php echo base_url(IMAGES."/hamburger.png")?>" width="28px" >
            </span>
            <a class="navbar-brand" href="<?php echo base_url("/"); ?>">
              <img height="50px" src="<?php echo base_url(IMAGES."/logo-new2.jpg"); ?>">
            </a>
        </div>
      </div>
    </nav>
    <div class="navigation-backdrop">
      <span class="glyphicon glyphicon-remove close-menu close"></span>
      <div id="navigation">
      <ul class="nav-menus">
        <li><a href="<?php echo base_url("/home"); ?>">Home</a></li>
        <li><a href="<?php echo base_url("/news"); ?>">News</a></li>
        <?php
          $categories = $this->category_model->get_all_categories();
          foreach($categories as $cat):?>
          <li><a href="<?php echo base_url('/p/'.url_title($cat->category_name, 'dash', TRUE)); ?>"><?php echo $cat->category_name; ?></a></li>
          <?php endforeach;
        ?>
              <!-- <li><a href="<?php echo base_url("auth/register"); ?>">Register</a></li> -->
        <?php
          if($this->ion_auth->logged_in()){
            ?>
            <li class=""><hr></li>
              <li><a href="<?php echo base_url("admin"); ?>">Admin Console</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false"><?php echo $this->ion_auth->user()->row()->first_name." (".$this->ion_auth->user()->row()->email.")" ;?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url("article/create"); ?>">Post an article</a></li>
                  <li><a href="<?php echo base_url("/"); ?>">Profile</a></li>
                  <li><a href="<?php echo base_url("/auth/change_password"); ?>">Change Password</a></li>
                  <?php if($this->ion_auth->is_admin()) { ?>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?php echo base_url("/auth/create_user"); ?>">Create New User</a></li>
                  <li><a href="<?php echo base_url("/auth/create_group"); ?>">Create User Group</a></li>
                  <?php } ?>
                  <li role="separator" class="divider"></li>
                  <li><a href="<?php echo base_url("/auth/logout"); ?>">Logout</a></li>
                </ul>
              </li>
            <?php
          }else{
            ?>
              <li><a href="<?php echo base_url("auth/login"); ?>">Sign in</a></li>
            <?php
          }
        ?>
      </ul>
    </div><!--/.nav-collapse -->
    </div>
    <!-- Fixed navbar Ends-->


    <?php $this->load->view('include/footer'); ?>
    <?php $this->load->view('include/templates'); ?>
    <?php $this->load->view('include/js_common'); ?>
    <script>
      function toggleNavgation(){
        $('.navigation-backdrop').slideDown('slow', function(){

        });
      }
      $('.close-menu').click(function(){
        $('.navigation-backdrop').slideUp('slow', function(){

        });
      });
    </script>
  </body>
</html>
