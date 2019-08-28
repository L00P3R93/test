<?php include 'components/authentication.php' ?>
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/header.php' ?>
<script type="text/javascript">
    function deleteCheck(form){
        var id = form.del_user_id.value;
        if(id == ""){
                alert("You have not Selected a User Record To Delete!");
                return false;
        }else{
            var r = confirm("Are you sure you want to delete User Id ="+id);
            if(r){
                    return true;
            }else{
                    return false;
            }

        }
    }
</script>
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
                                <h1 class="h3 mb-0 text-gray-800">Users</h1>
                                
                            </div>

                            <!-- Content Row -->
                            <div class="table-responsive-md">
                                <table class="table table-sm table-hover table-striped">
                                    <thead class="thead-dark">
                                            <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Delete</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">First Name</th>
                                                    <th scope="col">Surname</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Join_Date</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                                $rws = get_rows($dbconn,'users');
                                                for($i=0;$i<$rws;$i++){ ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i+1; ?></th>
                                                        <td>
                                                            <form action="components/user.process.php?user_name=<?php echo $_SESSION['username']; ?>&act=d3l&level=<?php echo $_GET['level'] ?>" method="post" onsubmit="return deleteCheck(this);">
                                                                <input type="hidden" name="del_user_id" value="<?php echo get_data($dbconn,$i,'user_id','users');?>" />
                                                                <button type="submit" class="btn btn-secondary del_btn"><i class="fa fa-trash  fa-sm fa-fw"></i></button>
                                                                <input type="hidden" name="del_btn" value="Delete Course" />
                                                            </form>
                                                        </td>
                                                        <td><?php echo get_data($dbconn,$i,'username','users'); ?></td>
                                                        <td><?php echo get_data($dbconn,$i,'f_name','users'); ?></td>
                                                        <td><?php echo get_data($dbconn,$i,'l_name','users'); ?></td>
                                                        <td><?php echo get_data($dbconn,$i,'email','users'); ?></td>
                                                        <td><?php echo get_data($dbconn,$i,'phone','users'); ?></td>
                                                        <td><?php echo get_data($dbconn,$i,'add_date','users'); ?></td>
                                                    </tr>
                                            <?php  } ?>
                                    </tbody>
                                </table>
                            </div>


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
