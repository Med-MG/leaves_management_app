<?php request_leave() ?>
<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-wallet icon-gradient bg-plum-plate"> </i>
      </div>
      <div>
        Edit your leave request
        <div class="page-title-subheading">
          change something in your leave request
        </div>
      </div>
    </div>
  </div>
</div>

<?php 

$sql = "SELECT * FROM demande_conge WHERE id = ?";
$edit_req = $pdo->prepare($sql);
$edit_req->execute([$_GET['edit_leave_request']]);
$request_to_edit = $edit_req->fetchAll();


?>

<div class="row">
  <div class="col-lg-6 col-xl-3">
    <div class="card mb-3 widget-content bg-night-fade">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Conge annuel</div>
          <div class="widget-subheading">PTO ( paid time off )</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-white"><span>21 days</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-3">
    <div class="card mb-3 widget-content bg-arielle-smile">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Conge exceptionnel</div>
          <div class="widget-subheading">exceptionnel</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-white"><span>10 days</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-3">
    <div class="card mb-3 widget-content bg-premium-dark">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Conge de maladie</div>
          <div class="widget-subheading">sante</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-warning"><span>20 days</span></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-xl-3">
    <div class="card mb-3 widget-content bg-happy-green">
      <div class="widget-content-wrapper text-white">
        <div class="widget-content-left">
          <div class="widget-heading">Maternite</div>
          <div class="widget-subheading">Maternite</div>
        </div>
        <div class="widget-content-right">
          <div class="widget-numbers text-dark"><span>14 days</span></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="divider mt-0" style="margin-bottom: 30px;"></div>

<form
  action=""
  method="post"
  enctype="multipart/form-data"
  class="needs-validation"
  novalidate=""
>

<?php if($edit_req): ?>
    <?php foreach($request_to_edit as $req): ?>
  <div class="main-card mb-3 card">
    <div class="card-body">
      <h5 class="card-title">leave request form</h5>
      <div class="row">
        <div class="col-md-6">
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom01">Leave type</label>
              <select
                name="leave_type"
                id="UserService"
                class="form-control"
                required
              >
                <?php  display_leave_in_form()?>
              </select>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="StartDate">start date</label>
              <div class="input-group">
                
                <input
                  type="date"
                  class="form-control"
                  id="StartDate"
                  value="<?php echo date($req->from_date); ?>"
                  name="start_date"
                  required
                />
                <div class="valid-feedback">
                  Looks good!
                </div>

              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="ExpiryDate">End date</label>
              <input
                type="date"
                class="form-control"
                value="<?php echo date($req->to_date); ?>"
                id="ExpiryDate"
                name="end_date"
                required
              />
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-row">
            <div class="col-md-12 mb-3">
              <label for="validationCustom03">Reason</label>
              <div class="position-relative form-group">
                <textarea
                  name="leave_comment"
                  id="exampleText"
                  class="form-control"
                  rows="4"
                  required
                ><?= $req->comment ;?>
            </textarea>
              </div>
              <div class="invalid-feedback">
                Please provide a valid text
              </div>
            </div>
          </div>
        </div>
        <div class="position-relative row" style="left: 15px;">
          <div class="col-sm-10">
            <input
              type="submit"
              class="btn btn-primary"
              value="submit"
              name="submit"
              style="width: 12rem; margin-top: 1rem;"
            />
          </div>
        </div>
      </div>
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
          "use strict";
          window.addEventListener(
            "load",
            function () {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName("needs-validation");
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function (
                form
              ) {
                form.addEventListener(
                  "submit",
                  function (event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add("was-validated");
                  },
                  false
                );
              });
            },
            false
          );
        })();

        document.getElementById("StartDate").addEventListener('change', (e) => {
          document.getElementById("ExpiryDate").min = e.target.value;
        });
        document.getElementById("ExpiryDate").addEventListener('change', (e) => {
          document.getElementById("StartDate").max = e.target.value;
        });

        function SetMinDate() {
          var now = new Date();

          var day = ("0" + now.getDate()).slice(-2);
          var month = ("0" + (now.getMonth() + 1)).slice(-2);

          var today = now.getFullYear() + "-" + (month) + "-" + (day);

          
          document.getElementById("StartDate").min = today;
          document.getElementById("ExpiryDate").min = today;
     }
    SetMinDate();
      </script>
    </div>
  </div>    
    <?php endforeach; ?>
    <?php endif; ?>
</form>
