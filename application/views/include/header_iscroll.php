<header class="drawer-navbar drawer-navbar--fixed" role="banner">
    <div class="drawer-container f8-nav-container">
      <div class="drawer-navbar-header">
        <a class="drawer-brand" href="<?php echo base_url("/"); ?>"><img src="<?php echo base_url(IMAGES."/logo-new2.jpg"); ?>"></a>
        <button type="button" class="drawer-toggle drawer-hamburger">
          <span class="sr-only">toggle navigation</span>
          <span class="drawer-hamburger-icon"></span>
        </button>
      </div>

      <nav class="drawer-nav" role="navigation">
        <ul class="drawer-menu">
          <li><a class="drawer-menu-item" href="<?php echo base_url("/news"); ?>">News</a></li>
          <li><a  class="drawer-menu-item" href="<?php echo base_url("/p/national"); ?>">National</a></li>
          <li><a  class="drawer-menu-item" href="<?php echo base_url("/p/business"); ?>">Business</a></li>
          <li><a  class="drawer-menu-item" href="<?php echo base_url("/p/social"); ?>">Social Media</a></li>
          <li><a  class="drawer-menu-item" href="<?php echo base_url("/p/tech"); ?>">Tech</a></li>
          <li><a  class="drawer-menu-item" href="<?php echo base_url("/p/sports"); ?>">Sports</a></li>
          <li class="drawer-dropdown">
            <a class="drawer-menu-item"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
            <ul class="drawer-dropdown-menu">
              <li><a class="drawer-menu-item"  href="<?php echo base_url("/p/world"); ?>">World</a></li>
              <li><a class="drawer-menu-item"  href="<?php echo base_url("/p/culture"); ?>">Culture</a></li>
              <li><a class="drawer-menu-item"  href="<?php echo base_url("/p/movies"); ?>">Movies</a></li>
              <li><a class="drawer-menu-item"  href="<?php echo base_url("/p/music"); ?>">Music</a></li>
              <li><a class="drawer-menu-item"  href="<?php echo base_url("/p/food"); ?>">Food</a></li>
              <li><a class="drawer-menu-item"  href="<?php echo base_url("/p/tv"); ?>">TV</a></li>
            </ul>
          </li>
        </ul>
        <ul class="drawer-menu pull-right">
          <?php
            if($this->ion_auth->logged_in()){
              ?>
                <li><a  class="drawer-menu-item" href="<?php echo base_url("admin"); ?>">Admin Console</a></li>
                <li class="drawer-dropdown">
                  <a  class="drawer-menu-item" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                  aria-haspopup="true" aria-expanded="false"><?php echo $this->ion_auth->user()->row()->first_name." (".$this->ion_auth->user()->row()->email.")" ;?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("article/create"); ?>">Post an article</a></li>
                    <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("/"); ?>">Profile</a></li>
                    <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("/auth/change_password"); ?>">Change Password</a></li>
                    <?php if($this->ion_auth->is_admin()) { ?>
                    <li role="separator" class="divider"></li>
                    <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("/auth/create_user"); ?>">Create New User</a></li>
                    <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("/auth/create_group"); ?>">Create User Group</a></li>
                    <?php } ?>
                    <li role="separator" class="divider"></li>
                    <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("/auth/logout"); ?>">Logout</a></li>
                  </ul>
                </li>
              <?php
            }else{
              ?>
                <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("auth/login"); ?>">Sign in</a></li>
              <?php
            }
          ?>
          <li><a class="drawer-dropdown-menu-item" href="<?php echo base_url("admin"); ?>"></a></li>
        </ul>
      </nav>
    </div>
  </header>
