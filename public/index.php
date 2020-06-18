
<?php require_once('../resources/config.php'); ?>
<?php include('user_auth.php') ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>



<?php include(TEMPLATE_BACK . DS . "nav.php") ?>
<?php include(TEMPLATE_BACK . DS . "ui_settings.php") ?>
     
<div class="app-main">
<?php include(TEMPLATE_FRONT . DS . "sidebar.php") ?>    
    <div class="app-main__outer">
        <div class="app-main__inner">
     




    <?php 
    if($_SERVER['REQUEST_URI'] == "./public/" || $_SERVER['REQUEST_URI'] == "/public/index.php"){
    include(TEMPLATE_FRONT . DS . "myprofile.php") ;
    }

    if(isset($_GET['apply_leave'])){
        include(TEMPLATE_FRONT . DS . "apply_leave.php");
    }
    if(isset($_GET['leave_history'])){
        include(TEMPLATE_FRONT . DS . "leave_history.php");
    }
    if(isset($_GET['edit_leave_request'])){
        include(TEMPLATE_FRONT . DS . "edit_leave_request.php");
    }




    ?>
        </div>
    </div>
</div>

<?php include( TEMPLATE_FRONT . DS . "footer.php" )?>