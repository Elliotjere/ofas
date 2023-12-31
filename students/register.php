<?php include "includes/db.php";

if (isset($_POST['reg_student'])) {
    $RegNo = $_POST['RegNo'];
    $name = $_POST['username'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $department = $_POST['dept'];
    $password = $_POST['password'];

    $query = "INSERT INTO student(RegNo, Name,  Email,  Course_CourseId, Department_DeptId, password) VALUES('$RegNo', '$name', '$email', $course, $department, '$password')";

    if ($conn->query($query)) {
        header("location: login.php");
    } else {
        header("location: register.php");
        echo mysqli_error($conn);
    }
}

?>

<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:42:40 GMT -->

<head>

    <meta charset="utf-8" />
    <title>OFAS | Sign Up </title>
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

    <div class="auth-page-wrapper pt-5">
        <!-- auth page bg -->
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                    </div>
                </div>
                <!-- end row -->
                <form action="" method="post">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-5">
                            <div class="card mt-4">

                                <div class="card-body p-4">
                                    <div class="text-center mt-2">
                                        <h5 class="text-primary">Create New OFAS Account</h5>
                                    </div>
                                    <div class="p-2 mt-4">
                                        <form action="" method="post">

                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Registration Number <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="useremail" placeholder="Enter Registration ID" required name="RegNo">
                                                <div class="invalid-feedback">
                                                    Please Registration Number
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="useremail" placeholder="Enter email address" required name="email">
                                                <div class="invalid-feedback">
                                                    Please enter email
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="username" placeholder="Enter username" required name="username">
                                                <div class="invalid-feedback">
                                                    Please enter username
                                                </div>
                                            </div>

                                            <div class="md-6">
                                                <label for="select">Choose Department</label>
                                                <select name="dept" class="form-control">

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


                                            <div class="md-6">
                                                    <label for="select">Choose course</label>
                                                    <select name="course" class="form-control">

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



                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required name="password">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <div class="invalid-feedback">
                                                        Please enter password
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label" for="password-input">Confirm Password</label>
                                                <div class="position-relative auth-pass-inputgroup">
                                                    <input type="password" class="form-control pe-5 password-input" onpaste="return false" placeholder="Enter password" id="password-input" aria-describedby="passwordInput" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required name="conf_password">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                    <div class="invalid-feedback">
                                                        Please enter password
                                                    </div>
                                                </div>
                                            </div>


                                            <div id="password-contain" class="p-3 bg-light mb-2 rounded">
                                                <h5 class="fs-13">Password must contain:</h5>
                                                <p id="pass-length" class="invalid fs-12 mb-2">Minimum <b>8 characters</b></p>
                                                <p id="pass-lower" class="invalid fs-12 mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                <p id="pass-upper" class="invalid fs-12 mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                <p id="pass-number" class="invalid fs-12 mb-0">A least <b>number</b> (0-9)</p>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit" name="reg_student">Sign Up</button>
                                            </div>


                                        </form>

                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->

                            <div class="mt-4 text-center">
                                <p class="mb-0">Already have an account ? <a href="login.php" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
                            </div>

                        </div>
                    </div>
                </form>

                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <p class="mb-0 text-muted">&copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> DIT. Created by Elliot Jere
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- end auth-page-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- particles js -->
    <script src="assets/libs/particles.js/particles.js"></script>
    <!-- particles app js -->
    <script src="assets/js/pages/particles.app.js"></script>
    <!-- validation init -->
    <script src="assets/js/pages/form-validation.init.js"></script>
    <!-- password create init -->
    <script src="assets/js/pages/passowrd-create.init.js"></script>
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2023 12:42:40 GMT -->

</html>