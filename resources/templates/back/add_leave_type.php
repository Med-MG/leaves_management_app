<?php add_leave_type(); ?>
<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-graph text-success"> </i>
      </div>
      <div>
        Add leave type
        <div class="page-title-subheading">
          Register new leave type
        </div>
      </div>
    </div>
    <div class="page-title-actions">
      <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
        class="btn-shadow mr-3 btn btn-dark">
        <i class="fa fa-star"></i>
      </button>
      <div class="d-inline-block dropdown">
        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          class="btn-shadow dropdown-toggle btn btn-info">
          <span class="btn-icon-wrapper pr-2 opacity-7">
            <i class="fa fa-business-time fa-w-20"></i>
          </span>
          Buttons
        </button>
        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon lnr-inbox"></i>
                <span>
                  Inbox
                </span>
                <div class="ml-auto badge badge-pill badge-secondary">
                  86
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon lnr-book"></i>
                <span>
                  Book
                </span>
                <div class="ml-auto badge badge-pill badge-danger">5</div>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <i class="nav-link-icon lnr-picture"></i>
                <span>
                  Picture
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a disabled href="javascript:void(0);" class="nav-link disabled">
                <i class="nav-link-icon lnr-file-empty"></i>
                <span>
                  File Disabled
                </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<form action="" method="post" enctype="multipart/form-data" class="needs-validation" novalidate="">
  <div class="main-card mb-3 card">
    <div class="card-body">
      <h5 class="card-title">service form</h5>

      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">Leave name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="leave name" name="leave_name" value=""
            required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">leave label</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="leave label" name="leave_label"
            value="" required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">leave duration</label>
          <input type="number" class="form-control" id="validationCustom02" placeholder="leave duration" name="leave_duration"
            value="" required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-sm-12 ">
          <input type="submit" class="btn btn-primary m-t-10" value="submit" name="submit" style="width: 10rem;">
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
      </script>
    </div>
  </div>
  </form>