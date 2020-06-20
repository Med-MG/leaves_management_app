<?php toggle_status() ?>
<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-car icon-gradient bg-mean-fruit"> </i>
      </div>
      <div>
        Analytics Dashboard
        <div class="page-title-subheading">
          Analytics and data of emplyees and there leave requests.
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-midnight-bloom">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Total Leaves</div>
          <div class="widget-subheading">This year Leave count</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-white"><span><?php echo $pdo->query('SELECT COUNT("status") as status FROM demande_conge')->fetch()->status ?></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-love-kiss">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Rejected</div>
          <div class="widget-subheading">Rejected Leave request</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-white"><span><?php echo $pdo->query('SELECT COUNT("status") as status FROM demande_conge where status = 0')->fetch()->status ?></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-grow-early">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Accepted</div>
          <div class="widget-subheading">Accepted leave requests</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-white"><span><?php echo $pdo->query('SELECT COUNT("status") as status FROM demande_conge where status = 1')->fetch()->status ?></span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
    <div class="card mb-3 widget-content bg-premium-dark">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Products Sold</div>
          <div class="widget-subheading">Revenue streams</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-warning"><span>$14M</span></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Active Users</div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th class="text-center">Service</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Reg Date</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php display_users() ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>