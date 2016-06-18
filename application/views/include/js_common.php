<script src="<?php echo base_url( COMPONENTS."/jquery/dist/jquery.js");?>"></script>
<script src="<?php echo base_url( COMPONENTS."/underscore/underscore.js");?>"></script>
<script src="<?php echo base_url( COMPONENTS."/bootstrap/dist/js/bootstrap.min.js" );?>"></script>
<script src="<?php echo base_url( MODULE."/ckeditor/ckeditor.js");?>"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.2.1/jssocials.min.js"></script>
<script src="<?php echo base_url( JS."/libs/metisMenu.min.js" );?>"></script>
<script src="<?php echo base_url( JS."/main.js" );?>"></script>
<script>
  $(function () {
    if(_.size($('#admin-menu'))){
      $('#admin-menu').metisMenu();
    }
  });
  $(document).ready(function(){
    $("#share").jsSocials({
        shares: ["email", "twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"],
        url: $('#share').attr('data-target-url'),
        text: "text to share",
        showLabel: true,
        showCount: true,
        shareIn: "popup",
        on: {
            click: function(e) {}
        }
    });
  });
</script>
