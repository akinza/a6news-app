<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="f8-nav-container container">
    <div class="nav-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed pull-right" data-toggle="collapse" data-target="#navbar" aria-expanded="false"        aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="<?php echo base_url("/"); ?>"><img height="50px" src="<?php echo base_url(IMAGES."/logo-new2.jpg"); ?>"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url("/home"); ?>">Home</a></li>
        <li><a href="<?php echo base_url("/news"); ?>">News</a></li>
        <li><a href="<?php echo base_url("/gallery"); ?>">Image Galleries</a></li>
        <li><a href="<?php echo base_url("/video"); ?>">Videos</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?php
              $categories = $this->category_model->get_all_categories();
              foreach($categories as $cat):
            ?>
              <li><a href="<?php echo base_url('/p/'.url_title($cat->category_name, 'dash', TRUE)); ?>"><?php echo $cat->category_name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <!-- <li><a href="<?php echo base_url("/home"); ?>">Home</a></li>
        <li><a href="<?php echo base_url("/news"); ?>">News</a></li>
        <li><a href="<?php echo base_url("/p/national"); ?>">National</a></li>
        <li><a href="<?php echo base_url("/p/business"); ?>">Business</a></li>
        <li><a href="<?php echo base_url("/p/sports"); ?>">Sports</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("/p/tech"); ?>">Tech</a></li>
            <li><a href="<?php echo base_url("/p/social"); ?>">Social Media</a></li>
            <li><a href="<?php echo base_url("/p/world"); ?>">World</a></li>
            <li><a href="<?php echo base_url("/p/culture"); ?>">Culture</a></li>
            <li><a href="<?php echo base_url("/p/movies"); ?>">Movies</a></li>
            <li><a href="<?php echo base_url("/p/music"); ?>">Music</a></li>
            <li><a href="<?php echo base_url("/p/food"); ?>">Food</a></li>
            <li><a href="<?php echo base_url("/p/tv"); ?>">TV</a></li>
          </ul>
        </li>-->
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <!-- <li><a href="<?php echo base_url("auth/register"); ?>">Register</a></li> -->
        <?php
          if($this->ion_auth->logged_in()){
            ?>
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
</div>
</nav>
<!-- Fixed navbar Ends-->
