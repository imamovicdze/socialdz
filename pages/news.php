<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: imamo-->
<!-- * Date: 27.8.2017.-->
<!-- * Time: 16.36-->
<!-- */-->
<?php
include_once ("../services/databaseService.php");
session_start();
$id = $_SESSION['id'];
if($id == null){
    header('Location: login.php');
}
$user = $db->getUserById($id);

// Checks if message is passed by query
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
        <?php
        if(!empty($message)){
            echo '<div class="alert alert-success">
                                        '.$message.'
                                    </div>';
        }
        ?>
        <div class="panel panel-default">
            <div class="panel-heading p-text">Add News</div>
            <div class="panel-body">
                <form action="../services/newsService.php" method="POST" class="form-horizontal" id="register-form">
                    <div class="form-group ">
                        <label class="col-sm-3 control-label" for="title">Title</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                            <!--<span class="glyphicon glyphicon-ok form-control-feedback"></span>-->
                        </div>
                    </div>
                    <div class="form-group ">  <!-- has-warning has-feedback -->
                        <label class="col-sm-3 control-label" for="content">News Content</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" id="content" name="content"></textarea>
                            <!--<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>-->
                        </div>
                    </div>
                    <div class="form-group ">  <!-- has-warning has-feedback -->
                        <label class="col-sm-3 control-label" for="category">Categories</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="category" name="category">
                                <option value="culture">Culture</option>
                                <option value="sport">Sport</option>
                                <option value="politics">Politics</option>
                                <option value="economy">Economy</option>
                            </select>
                            <!--<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>-->
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