<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      Service
    </title>
    <meta
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
      name="viewport"
    />
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"
    />
    <!-- CSS Files -->
    <link
      href="assets/css/material-dashboard.css?v=2.1.0"
      rel="stylesheet"
    />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
  </head>

  <body class="dark-edition">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="purple"
        data-background-color="black"
        data-image="assets/img/sidebar-2.jpg"
      >
        <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"> <a class="navbar-brand" href="#">
        <img src="../assets/img/logo.png" width="100%" height="100%" style="margin-left: 2%;" alt="">
      </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
          <li class="nav-item">
              <a class="nav-link" href="./adminDashboard_sidebar.php">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#client" class="nav-link" data-toggle="collapse"
                ><i class="material-icons">person</i>
                <p>Client</p></a
              >
              <div class="collapse" id="client">
                <ul class="list-unstyled nav">
                  <li class="nav-item">
                    <a class="nav-link" name href="./addClient.php"
                      >Add Client</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./assignService.php"
                      >Assign Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./modifyClient.php">
                      Modify Client</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./createService.php"
                      >Modify Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./createPackage.php"
                      >Create Package</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Auto SLA</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item active">
              <a href="#master" class="nav-link" data-toggle="collapse"
                ><i class="material-icons">supervisor_account</i>
                <p>Master</p></a
              >
              <div class="collapse" id="master">
                <ul class="list-unstyled nav">
                  <li class="nav-item">
                    <a class="nav-link" name href="./bankDetails.php"
                      >Bank Details</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./LOB.php">LOB</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./mandatoryDocuments.php"
                      >Mandatory Documents</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./package.php">Create Package</a>
                  </li>
                  <li class="nav-item active">
                    <a
                      class="nav-link"
                      href="./service.php
                    "
                      >Service</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./serviceType.php"
                      >Service Type</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./addModifyUser.php"
                      >Add Modify User</a
                    >
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="./standardMacro.php"
                      >Standard Macro</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./reportColor.php"
                      >Report Color Code</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./reportConfig.php"
                      >Report Configuration Master</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">Report</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">Task</a>
            </li>
            <li class="navbar-item">
              <a href="#" class="nav-link text-muted">User</a>
            </li>
            <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="upgrade.php">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
          id="navigation-example"
        >
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:void(0)">Service</a>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
              data-target="#navigation-example"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <form class="navbar-form">
                <div class="input-group no-border">
                  <input
                    type="text"
                    value=""
                    class="form-control"
                    placeholder="Search..."
                  />
                  <button
                    type="submit"
                    class="btn btn-default btn-round btn-just-icon"
                  >
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a
                    class="nav-link"
                    href="javscript:void(0)"
                    id="navbarDropdownMenuLink"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownMenuLink"
                  >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Mike John responded to your email</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >You have 5 new tasks</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >You're now friend with Andrew</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Another Notification</a
                    >
                    <a class="dropdown-item" href="javascript:void(0)"
                      >Another One</a
                    >
                  </div>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                <div class="ripple-container"></div></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="MyProfile.php">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="API/db_logout.php">Log out</a>
                </div>
              </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Service</h4>
                  </div>
                  <div class="card-body">
                    <form id="ajax">
                      <div class="row justify-content-around">
                        <div class="form-group col-md-4">
                          <label for="Service Type" style="margin-left: 4%;"
                            >Service Type</label
                          >
                          <select
                            id="Service Type"
                            class="form-control"
                            required
                          >
                            <option selected>Choose...</option>
                            <option>...</option>
                          </select>
                        </div>

                        <div class="form-group col-md-4">
                          <label for="Service" style="margin-left: 4%;"
                            >Service</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder=""
                          />
                        </div>
                      </div>
                      <div class="row justify-content-around">
                        <div class="form-group col-md-4">
                          <label for="Service" style="margin-left: 4%;"
                            >Service</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            placeholder=""
                          />
                        </div>

                        <div class="form-check col-md-4">
                          <label class="form-check-label">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                            />
                            Is Web Service
                            <span class="form-check-sign">
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="row justify-content-end">
                        <button
                          type="submit"
                          class="btn btn-primary mx-2"
                          style="margin-right: 3%;"
                        >
                          Save
                        </button>

                        <button
                          type="button"
                          class="btn btn-primary"
                          style="margin-right: 3%;"
                        >
                          Reset
                        </button>
                      </div>
                      <hr />
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header card-header-primary">
                              <h3 class="card-title">Service</h3>
                            </div>
                            <table
                              class="table table-hover"
                              style="margin-top: 4%;"
                            >
                              <thead class="text-primary thead-dark">
                                <th>
                                  ServiceID
                                </th>

                                <th>
                                  Service
                                </th>
                                <th>
                                  Service Type
                                </th>
                                <th>
                                  Edit
                                </th>
                                <th>
                                  Delete
                                </th>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    1
                                  </td>
                                  <td>
                                    Dakota Rice
                                  </td>
                                  <td>
                                    Dakota Rice
                                  </td>

                                  <td class="text-primary">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                    >
                                      Edit
                                    </button>
                                  </td>
                                  <td class="text-primary">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                    >
                                      Delete
                                    </button>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    2
                                  </td>
                                  <td>
                                    Minerva Hooper
                                  </td>
                                  <td>
                                    Minerva Hooper
                                  </td>

                                  <td class="text-primary">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                    >
                                      Edit
                                    </button>
                                  </td>
                                  <td class="text-primary">
                                    <button
                                      type="button"
                                      class="btn btn-primary btn-sm"
                                    >
                                      Delete
                                    </button>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          const x = new Date().getFullYear();
          let date = document.getElementById("date");
          date.innerHTML = "&copy; " + x + date.innerHTML;
        </script>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $(".sidebar");

          $sidebar_img_container = $sidebar.find(".sidebar-background");

          $full_page = $(".full-page");

          $sidebar_responsive = $("body > .navbar-collapse");

          window_width = $(window).width();

          $(".fixed-plugin a").click(function (event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass("switch-trigger")) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $(".fixed-plugin .active-color span").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-color", new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr("filter-color", new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr("data-color", new_color);
            }
          });

          $(".fixed-plugin .background-color .badge").click(function () {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("background-color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-background-color", new_color);
            }
          });

          $(".fixed-plugin .img-holder").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).parent("li").siblings().removeClass("active");
            $(this).parent("li").addClass("active");

            var new_image = $(this).find("img").attr("src");

            if (
              $sidebar_img_container.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              $sidebar_img_container.fadeOut("fast", function () {
                $sidebar_img_container.css(
                  "background-image",
                  'url("' + new_image + '")'
                );
                $sidebar_img_container.fadeIn("fast");
              });
            }

            if (
              $full_page_background.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $full_page_background.fadeOut("fast", function () {
                $full_page_background.css(
                  "background-image",
                  'url("' + new_image_full_page + '")'
                );
                $full_page_background.fadeIn("fast");
              });
            }

            if ($(".switch-sidebar-image input:checked").length == 0) {
              var new_image = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .attr("src");
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css(
                "background-image",
                'url("' + new_image + '")'
              );
            }
          });

          $(".switch-sidebar-image input").change(function () {
            $full_page_background = $(".full-page-background");

            $input = $(this);

            if ($input.is(":checked")) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn("fast");
                $sidebar.attr("data-image", "#");
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn("fast");
                $full_page.attr("data-image", "#");
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr("data-image");
                $sidebar_img_container.fadeOut("fast");
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr("data-image", "#");
                $full_page_background.fadeOut("fast");
              }

              background_image = false;
            }
          });

          $(".switch-sidebar-mini input").change(function () {
            $body = $("body");

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $("body").removeClass("sidebar-mini");
              md.misc.sidebar_mini_active = false;

              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
            } else {
              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                "destroy"
              );

              setTimeout(function () {
                $("body").addClass("sidebar-mini");

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event("resize"));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });
        });
      });

      let form = document.getElementById("ajax");
      form.addEventListener(
        "submit",
        function (ev) {
          let oData = new FormData(form);
          for (let pair of oData.entries()) {
            console.log(pair[0] + ", " + pair[1]);
          }
          ev.preventDefault();
        },
        false
      );
    </script>
  </body>
</html>
