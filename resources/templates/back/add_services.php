<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-graph text-success"> </i>
      </div>
      <div>
        Add Employees
        <div class="page-title-subheading">
          Register new employee
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
      <h5 class="card-title">Personal information</h5>

      <div class="form-row">
        <div class="col-md-4 mb-3">
          <label for="validationCustom01">First name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" name="name" value=""
            required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">Last name</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="surname"
            value="" required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">CIN</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="EC66660" name="cin" value=""
            required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationCustom03">Phone number</label>
          <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control"
            id="validationCustom03" placeholder="Format: 066-658-2020" required="" />
          <div class="invalid-feedback">
            Please provide a valid phone number
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom04">Gender</label>
          <select class="mb-2 form-control" class="form-control" id="validationCustom04" name="sexe" required="">
            <option>Male</option>
            <option>Female</option>
          </select>
          <div class="invalid-feedback">
            Please provide a gender
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationCustom05">Birthday</label>
          <input type="date" name="birthday" class="form-control" id="validationCustom05" placeholder="Birthday"
            required="" />
          <div class="invalid-feedback">
            Please provide birth date.
          </div>
        </div>
      </div>

      <div class="form-group">
        <label for="validationCustom02">File</label>
        <!-- MAX_FILE_SIZE must precede the file input field -->
        <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
        <input name="profile_pic" id="exampleFile" type="file" class="form-control-file" required />
        <div class="valid-feedback">
          File added succefully
        </div>
        <div class="invalid-feedback">
          Please uplaod a file
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