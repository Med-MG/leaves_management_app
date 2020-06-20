<?php delete_leave_request() ?>
<?php 

if(isset($_GET['reject_leave_request'])){
    $sql = "UPDATE demande_conge SET status = 0 WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute([$_GET['reject_leave_request']]);
    if($res){
        set_message("<div class='alert alert-success fade show' role='alert' style='margin-bottom: 40px;'>request rejected successfuly</div>");
    }else {
        set_message("<div class='alert alert-danger fade show' role='alert' style='margin-bottom: 40px;'>There is a problem with the query</div>");
    }
}

if(isset($_GET['approve_leave_request'])){
    $sql = "UPDATE demande_conge SET status = 1 WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute([$_GET['approve_leave_request']]);
    if($res){
        set_message("<div class='alert alert-success fade show' role='alert' style='margin-bottom: 40px;'>request approved successfuly</div>");
    }else {
        set_message("<div class='alert alert-danger fade show' role='alert' style='margin-bottom: 40px;'>There is a problem with the query</div>");
    }
}

?>
<?php display_msg() ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-box2 icon-gradient bg-amy-crisp">
                </i>
            </div>
            <div>Manage leave requests
                <div class="page-title-subheading">here you can manage leaves requested by employees
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Active services</div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Employee</th>
                            <th class="text-center">Leave type</th>
                            <th class="text-center">Start date</th>
                            <th class="text-center">End date</th>
                            <th class="text-center">reason</th>
                            <th class="text-center">Created at</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php display_leave_request(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
