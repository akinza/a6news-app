<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="nav-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
              data-toggle="collapse" data-target="#navbar" aria-expanded="false"
              aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url("/"); ?>">f8news</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url("/news/national"); ?>">National</a></li>
              <li><a href="<?php echo base_url("/news/international"); ?>">International</a></li>
              <li><a href="<?php echo base_url("/news/business"); ?>">Business</a></li>
              <li><a href="<?php echo base_url("/news/social"); ?>">Social Media</a></li>
              <li><a href="<?php echo base_url("/news/tech"); ?>">Tech</a></li>
              <li><a href="<?php echo base_url("/news/sports"); ?>">Sports</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a href="<?php echo base_url("auth/login"); ?>">Sign in</a></li>
          </ul>
        </div><!--/.nav-collapse -->
    </div>
  </div>
</nav>
<!-- Fixed navbar Ends-->
