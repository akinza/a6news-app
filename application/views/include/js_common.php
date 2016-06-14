<script src="<?php echo base_url( COMPONENTS."/jquery/dist/jquery.js");?>"></script>
<script src="<?php echo base_url( COMPONENTS."/underscore/underscore.js");?>"></script>
<script src="<?php echo base_url( COMPONENTS."/bootstrap/dist/js/bootstrap.min.js" );?>"></script>
<script src="<?php echo base_url( MODULE."/ckeditor/ckeditor.js");?>"></script>
<script src="<?php echo base_url( JS."/libs/metisMenu.min.js" );?>"></script>
<script src="<?php echo base_url( JS."/main.js" );?>"></script>
<script>
  $(function () {
    if(_.size($('#admin-menu'))){
      $('#admin-menu').metisMenu();
    }
  });
</script>
