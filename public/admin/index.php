
<?php 
require_once('../../resources/config.php');
include("admin_auth.php"); 
include(TEMPLATE_FRONT . DS . "header.php");

?>




<?php include(TEMPLATE_BACK . DS . "nav.php") ?>
<?php include(TEMPLATE_BACK . DS . "ui_settings.php") ?>
     
<div class="app-main">
    
<?php include(TEMPLATE_BACK . DS . "sidebar.php") ?>    



    <?php 
    if($_SERVER['REQUEST_URI'] == "/public/admin/" || $_SERVER['REQUEST_URI'] == "/public/admin/index.php"){
    include(TEMPLATE_BACK . DS . "dashboard.php") ;
    }

    if(isset($_GET['add_user'])){
        include(TEMPLATE_BACK . DS . "add_users.php");
    }
    ?>
</div>



<?php include( TEMPLATE_FRONT . DS . "footer.php" )?>
 