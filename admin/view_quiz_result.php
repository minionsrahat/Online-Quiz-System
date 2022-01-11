<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>techQUIZ Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body id="page-top">
<?php
include('mql_connection.php');
?>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php 
                  include('navbar.php');
                  ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <!-- <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <?php 
                  include('content_row.php');
                  ?>


                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-10 col-lg-10 mx-auto">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Quiz result list</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body col-12 mx-auto">

                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Catagory name</th>
                                            <th>Total ques</th>
                                            <th>Right ans</th>
                                            <th>Points</th>
                                            <th>User Name</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql="SELECT results.result_id as rid,users.fname as name, categories_quiz.cat_name as cat_name,results.* FROM results,users,categories_quiz WHERE users.user_id=results.u_id and categories_quiz.cat_id=results.cat_id";

                                            $result =$con->query($sql);
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                                
                                                <tr>
                                                    <td><?php echo $row['cat_name'] ?></td>
                                                    <td><?php echo $row['total_ques'] ?></td>
                                                    <td><?php echo $row['right_ans'] ?></td>
                                                    <td><?php echo $row['points'] ?></td>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['date'] ?></td>
                                                    <td><?php echo $row['time'] ?></td>
                                                    <!-- <td><a href="delete.php?table=questions&col_name=ques_id&id=<?php echo $row['ques_id'] ?>" class="btn btn-danger text-white"> Delete</a><a onclick="edit(<?php echo $row['ques_id'] ?>)" class="btn btn-primary text-white"><i class="fa fa-pencil mr-1" aria-hidden="true"></i>Edit</a></td> -->
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                        </div>



                    </div>

                    <!-- Content Row -->



                    <!-- Approach -->


                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; techQUIZ.com 2020</span>
            </div>
        </div>
    </footer>
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
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
 

 

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


    <script>
        function edit(value) {
            // console.log('hi');
            var data = value;

            $.ajax({
                type: "post",
                url: "data_man.php",
                data: {
                    action: 'get_edit_ques_data',
                    id: data
                },
                dataType: "json",
                success: function(response) {
                    $('#ques_title').val(response.ques_title);
                    $('#cat_id').val(response.cat_id);
                    $('#ans_id').val(response.ans_id);
                    var footer = '<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button><button data-dismiss="modal" type="button" class="btn btn-primary" onclick="send_edit_request(' + value + ')" >Save</button>'

                    // $('#editmodal .modal-body').html(html);
                    $('#editmodel .modal-footer').html(footer);
                    $('#editmodel').modal('show');
                }
            });
            // var html="<p class='lead'>Are you sure You want to issue this book for next <input type='text'id='issue_id' value='15'> Days</p>"
        }

        function send_edit_request(data)
        {
            var id=data;
            var title=$('#ques_title').val();
            var cat_id=$('#cat_id').val();
            var ans_id=$('#ans_id').val();
            $.ajax({
                type: "post",
                url: "data_man.php",
                data: {action:'edit_ques_data',id:id,title:title,cat_id:cat_id,ans_id:ans_id},
                success: function (response) {
                    alert('Data edited successfully');
                    window.location.href = "http://localhost/online%20Quiz%20System/admin/view_categoris.php";
                }
            });
        }
        $(document).ready( function () {
    $('table').DataTable();
} );
    </script>

</body>

</html>