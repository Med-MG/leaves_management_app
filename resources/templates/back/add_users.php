<?php add_users(); ?>
<div class="app-main__outer">
  <div class="app-main__inner">
    <div class="app-page-title">
      <div class="page-title-wrapper">
        <div class="page-title-heading">
          <div class="page-title-icon">
            <i class="pe-7s-graph text-success"> </i>
          </div>
          <div>
            Add users
            <div class="page-title-subheading">
              Register new employee
            </div>
          </div>
        </div>
        <div class="page-title-actions">
          <button
            type="button"
            data-toggle="tooltip"
            title="Example Tooltip"
            data-placement="bottom"
            class="btn-shadow mr-3 btn btn-dark"
          >
            <i class="fa fa-star"></i>
          </button>
          <div class="d-inline-block dropdown">
            <button
              type="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              class="btn-shadow dropdown-toggle btn btn-info"
            >
              <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="fa fa-business-time fa-w-20"></i>
              </span>
              Buttons
            </button>
            <div
              tabindex="-1"
              role="menu"
              aria-hidden="true"
              class="dropdown-menu dropdown-menu-right"
            >
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
                  <a
                    disabled
                    href="javascript:void(0);"
                    class="nav-link disabled"
                  >
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

    <div class="main-card mb-3 card">
      <div class="card-body">
        <h5 class="card-title">Personal information</h5>
        <form class="needs-validation" novalidate="">
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">First name</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom01"
                placeholder="First name"
                name="name"
                value=""
                required=""
              />
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">Last name</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom02"
                placeholder="Last name"
                name="surname"
                value=""
                required=""
              />
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom02">CIN</label>
              <input
                type="text"
                class="form-control"
                id="validationCustom02"
                placeholder="EC66660"
                name="cin"
                value=""
                required=""
              />
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <!-- <div class="col-md-4 mb-3">
                                            <label for="validationCustomUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div> -->
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-3">
              <label for="validationCustom03">Phone number</label>
              <input
                type="tel"
                name="phone"
                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                class="form-control"
                id="validationCustom03"
                placeholder="Format: 066-658-2020"
                required=""
              />
              <div class="invalid-feedback">
                Please provide a valid phone number
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom04">Gender</label>
              <select
                class="mb-2 form-control"
                class="form-control"
                id="validationCustom04"
                name="sexe"
                required=""
              >
                <option>Male</option>
                <option>Female</option>
              </select>
              <div class="invalid-feedback">
                Please provide a gender
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="validationCustom05">Birthday</label>
              <input
                type="date"
                class="form-control"
                id="validationCustom05"
                placeholder="Birthday"
                required=""
              />
              <div class="invalid-feedback">
                Please provide birth date.
              </div>
            </div>
          </div>
          <!-- <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="">
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div> -->
          <div class="form-group">
            <label for="validationCustom02">File</label>
            <!-- <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required=""> -->
            <input
              name="file"
              id="exampleFile"
              type="file"
              class="form-control-file"
              required
            />
            <div class="valid-feedback">
              File added succefully
            </div>
            <div class="invalid-feedback">
              Please uplaod a file
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>

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

    <div class="main-card mb-3 card">
      <div class="card-body">
        <h5 class="card-title">professional information</h5>
        <form class="">
          <div class="position-relative row form-group">
            <label for="exampleEmail" class="col-sm-2 col-form-label"
              >Email</label
            >
            <div class="col-sm-10">
              <input
                name="email"
                id="exampleEmail"
                placeholder="with a placeholder"
                type="email"
                class="form-control"
              />
            </div>
          </div>
          <div class="position-relative row form-group">
            <label for="examplePassword" class="col-sm-2 col-form-label"
              >Password</label
            >
            <div class="col-sm-10">
              <input
                name="password"
                id="examplePassword"
                placeholder="password placeholder"
                type="password"
                class="form-control"
              />
            </div>
          </div>
          <div class="position-relative row form-group">
            <label for="exampleSelect" class="col-sm-2 col-form-label"
              >Select</label
            >
            <div class="col-sm-10">
              <select
                name="select"
                id="exampleSelect"
                class="form-control"
              ></select>
            </div>
          </div>
          <div class="position-relative row form-group">
            <label for="exampleSelectMulti" class="col-sm-2 col-form-label"
              >Select Multiple</label
            >
            <div class="col-sm-10">
              <select
                multiple=""
                name="selectMulti"
                id="exampleSelectMulti"
                class="form-control"
              ></select>
            </div>
          </div>
          <div class="position-relative row form-group">
            <label for="exampleText" class="col-sm-2 col-form-label"
              >Text Area</label
            >
            <div class="col-sm-10">
              <textarea
                name="text"
                id="exampleText"
                class="form-control"
              ></textarea>
            </div>
          </div>
          <div class="position-relative row form-group">
            <label for="exampleFile" class="col-sm-2 col-form-label"
              >File</label
            >
            <div class="col-sm-10">
              <input
                name="file"
                id="exampleFile"
                type="file"
                class="form-control-file"
              />
              <small class="form-text text-muted"
                >This is some placeholder block-level help text for the above
                input. It's a bit lighter and easily wraps to a new line.</small
              >
            </div>
          </div>
          <fieldset class="position-relative row form-group">
            <legend class="col-form-label col-sm-2">Radio Buttons</legend>
            <div class="col-sm-10">
              <div class="position-relative form-check">
                <label class="form-check-label"
                  ><input name="radio2" type="radio" class="form-check-input" />
                  Option one is this and that—be sure to include why it's
                  great</label
                >
              </div>
              <div class="position-relative form-check">
                <label class="form-check-label"
                  ><input name="radio2" type="radio" class="form-check-input" />
                  Option two can be something else and selecting it will
                  deselect option one</label
                >
              </div>
              <div class="position-relative form-check disabled">
                <label class="form-check-label"
                  ><input
                    name="radio2"
                    disabled=""
                    type="radio"
                    class="form-check-input"
                  />
                  Option three is disabled</label
                >
              </div>
            </div>
          </fieldset>
          <div class="position-relative row form-group">
            <label for="checkbox2" class="col-sm-2 col-form-label"
              >Checkbox</label
            >
            <div class="col-sm-10">
              <div class="position-relative form-check">
                <label class="form-check-label"
                  ><input
                    id="checkbox2"
                    type="checkbox"
                    class="form-check-input"
                  />
                  Check me out</label
                >
              </div>
            </div>
          </div>
          <div class="position-relative row form-check">
            <div class="col-sm-10 offset-sm-2">
              <button class="btn btn-secondary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
