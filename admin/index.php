<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/header.php' ?>
<body id="page-top">
  <!-- Page Wrapper -->
      <div id="wrapper">
        <!-- Sidebar -->
        <?php include 'controllers/nav/nav.sidebar.php' ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <?php include 'controllers/nav/nav.topbar.php' ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              </div>

              <!-- Content Row -->
              <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Students Registered</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo get_rows($dbconn,'users') ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Some Data</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo get_rows($dbconn,'chief') ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Some Data</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo get_rows_data($dbconn,'applications','bursary_status','Approved'); ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Some Data</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php //echo get_rows_data($dbconn,'applications','bursary_status','Pending'); ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Content Row -->



              <!-- Content Row -->


            </div>
            <!-- /.container-fluid -->

          </div>
          <!-- End of Main Content -->

        <!-- Footer -->
        <?php include 'controllers/base/footer.php'; ?>
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">x</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../components/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

 <?php include 'controllers/base/javascript.php' ?>

</body>

</html>
