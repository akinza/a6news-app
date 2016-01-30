<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <!-- <div class="container"> -->
    <div class="nav-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed pull-left"
        data-toggle="collapse" data-target="#navbar" aria-expanded="false"
        aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="<?php echo base_url("/"); ?>"><span style="color:orange; font-weight:bold;">Bharat</span><span style=" font-weight:bold;color:green;">Bhutan</span>.com</a> -->
      <a class="navbar-brand" href="<?php echo base_url("/"); ?>">f8news</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a href="<?php echo base_url("/news/national"); ?>">National</a></li>
        <li><a href="<?php echo base_url("/news/business"); ?>">Business</a></li>
        <li><a href="<?php echo base_url("/news/social"); ?>">Social Media</a></li>
        <li><a href="<?php echo base_url("/news/tech"); ?>">Tech</a></li>
        <li><a href="<?php echo base_url("/news/sports"); ?>">Sports</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url("/news/international"); ?>">International</a></li>
            <li><a href="<?php echo base_url("/news/international"); ?>">Culture</a></li>
            <li><a href="<?php echo base_url("/news/international"); ?>">Movies</a></li>
            <li><a href="<?php echo base_url("/news/international"); ?>">Music</a></li>
            <li><a href="<?php echo base_url("/news/international"); ?>">Food</a></li>
            <li><a href="<?php echo base_url("/news/international"); ?>">TV</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url("auth/login"); ?>">Sign in</a></li>
        <!-- <li><a href="<?php echo base_url("auth/register"); ?>">Register</a></li> -->
        <li><a href="<?php echo base_url("admin"); ?>">Admin Console</a></li>
        <li><a href="<?php echo base_url("admin"); ?>"></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
<!-- </div> -->
</nav>
<!-- Fixed navbar Ends-->
