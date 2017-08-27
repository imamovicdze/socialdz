<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: imamo-->
<!-- * Date: 8/26/2017-->
<!-- * Time: 3:47 PM-->
<!-- */-->

<html>
    <?php include_once("partials\head.php"); ?>

    <?php include_once("partials\header.php"); ?>

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Registration Form</div>
                <div class="panel-body">
                    <form action="../services/createUserService.php" method="POST" class="form-horizontal" id="register-form">
                        <div class="form-group ">
                            <label class="col-sm-3 control-label" for="name">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                <!--<span class="glyphicon glyphicon-ok form-control-feedback"></span>-->
                            </div>
                        </div>
                        <div class="form-group ">  <!-- has-warning has-feedback -->
                            <label class="col-sm-3 control-label" for="surname">Surname</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="surname" name="surname" placeholder="Surname">
                                <!--<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>-->
                            </div>
                        </div>
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
                        <div class="form-group ">
                            <label class="col-sm-3 control-label" for="rPassword">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="rPassword" name="password2" placeholder="Re-Type Password">
                                <!--<span class="glyphicon glyphicon-ok form-control-feedback"></span>-->
                            </div>
                        </div>
                        <p class="p-right">
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button class="btn btn-default" type="submit">Submit</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Custom Scripts -->
    <script src="../assets/js/validationReg.js"></script>

</html>