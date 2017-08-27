<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: imamo-->
<!-- * Date: 8/26/2017-->
<!-- * Time: 4:12 PM-->
<!-- */-->

<?php
    $message;
    if(isset( $_GET['message'])) {
        $message = $_GET['message'];
    }
?>
<html>
    <?php include_once("partials\head.php"); ?>

    <?php include_once("partials\header.php"); ?>


    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 login-container">
                <div class="panel panel-default">
                    <div class="panel-heading">Login Form</div>
                    <div class="panel-body">

                        <form action="../services/loginService.php" method="GET" class="form-horizontal" id="register-form1">
                            <div class="form-group "> <!-- has-error has-feedback-->
                                <label class="col-sm-3 control-label" for="email">E-mail</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                                    <!--<span class="glyphicon glyphicon-remove form-control-feedback"></span>-->
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="col-sm-3 control-label" for="password">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    <!--<span class="glyphicon glyphicon-ok form-control-feedback"></span>-->
                                </div>
                            </div>
                            <p class="p-text">
                                <button class="btn btn-primary" type="reset">Reset</button>
                                <button class="btn btn-default" type="submit">Submit</button>
                            </p>
                        </form>
                        <?php
                            if(!empty($message)){
                                echo '<div class="alert alert-danger">
                                        '.$message.'
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Custom Scripts -->
    <script src="../assets/js/validationLog.js"></script>
</html>