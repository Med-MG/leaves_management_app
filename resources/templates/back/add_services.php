<?php add_services(); ?>
<div class="app-page-title">
  <div class="page-title-wrapper">
    <div class="page-title-heading">
      <div class="page-title-icon">
        <i class="pe-7s-graph text-success"> </i>
      </div>
      <div>
        Add service
        <div class="page-title-subheading">
          Register new service
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
          <label for="validationCustom01">service name</label>
          <input type="text" class="form-control" id="validationCustom01" placeholder="service name" name="service_name" value=""
            required="" />
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="validationCustom02">service short name</label>
          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="service_short_name"
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