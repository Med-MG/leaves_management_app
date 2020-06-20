<?php delete_leave_request() ?>
<?php display_msg() ?>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-car icon-gradient bg-mean-fruit">
                </i>
            </div>
            <div>Manage your leave history
                <div class="page-title-subheading">here you can edit or delete your leave requests
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
