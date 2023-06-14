<?php
session_start();
include "includes/db.php";


if (isset($_POST['add_module'])) {

    $module_name = $_POST['module_name'];
    $module_credit = $_POST['module_credit'];
    $module_dept = $_POST['module_dept'];
    $module_course = $_POST['module_course'];

    $sql = "INSERT INTO Module(ModuleName, ModuleCredit, Department_DeptId, Course_CourseId) VALUES('$module_name', '$module_credit', '$module_dept', '$module_course')";

    if (mysqli_query($conn, $sql)) {
        echo "succesful";
    } else {
        echo "bad";
        echo mysqli_error($conn);
    }
}
?>
<!doctype html>
<!--	ModuleName	ModuleCredit	Department_DeptId	Course_CourseId	 -->

<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:43:21 GMT -->

<head>

    <meta charset="utf-8" />
    <title>OFAS - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php include "includes/header.php" ?>


        <?php include "includes/navigation.php" ?>




        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">

                                <!-- end card header -->
                                <div class="card-body">


                                    <div class="card-header align-items-center d-flex">
                                        <h4 class="card-title mb-0 flex-grow-1">Add Module</h4>
                                    </div>

                                    <form action="" method="post">
                                        <div class="live-preview">
                                            <div class="row ">

                                                <!--	ModuleName	ModuleCredit	Department_DeptId	Course_CourseId	 -->


                                                <!--end col-->
                                                <div class="col-lg-6 col-md-6">
                                                    <div>
                                                        <label for="iconInput" class="form-label">Module Name</label>
                                                        <div class="">
                                                            <input type="text" class="form-control form-control-icon" id="iconInput" placeholder="" name="module_name">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end col-->
                                                <div class="col-lg-6 col-md-6">
                                                    <div>
                                                        <label for="iconrightInput" class="form-label">Module Credit</label>
                                                        <div class=" right">
                                                            <input type="text" class="form-control" placeholder="Enter integer value" name="module_credit">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="select">Department</label>
                                                    <select name="module_dept" class="form-control">

                                                        <option selected>Select</option>

                                                        <?php
                                                        $sql1 = "SELECT DeptName FROM Department";
                                                        $result = $conn->query($sql1);
                                                        $value = 1;
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<option value = '$value'>";
                                                            echo $row['DeptName'];
                                                            echo "</option>";
                                                            $value = $value + 1;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>


                                                <div class="col-lg-6 col-md-6">
                                                    <label for="select">Course</label>
                                                    <select name="module_course" class="form-control">

                                                        <option selected>Select</option>

                                                        <?php
                                                        $sql1 = "SELECT CourseName FROM Course";
                                                        $result = $conn->query($sql1);
                                                        $value = 1;
                                                        while ($row = mysqli_fetch_assoc($result)) {
                                                            echo "<option value = '$value'>";
                                                            echo $row['CourseName'];
                                                            echo "</option>";
                                                            $value = $value + 1;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <!--end col-->

                                                <div style="padding-top: 10px;">
                                                    <button type="submit" class="btn btn-success" name="add_module">Submit</button>
                                                </div>
                                                <!--end col-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </form>


                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


                    <!--end row-->


                    <!--end row-->

                </div> <!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php include "includes/footer.php" ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- prismjs plugin -->
    <script src="assets/libs/prismjs/prism.js"></script>

    <script src="assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/forms-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:43:21 GMT -->

</html>