<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: imamo-->
<!-- * Date: 8/26/2017-->
<!-- * Time: 4:35 PM-->
<!-- */-->
<?php
    include_once ("../services/databaseService.php");
    session_start();
    $id = $_SESSION['id'];
    if($id == null){
        header('Location: login.php');
    }
    $user = $db->getUserById($id);

    $news = $db->getAllNews();
?>
<html>
    <?php include_once("partials\head.php"); ?>

    <?php include_once("partials\header.php"); ?>

<div class="container">
    <div class="row">
        <?php
            foreach($news as $new){
                echo ' <div class="col-sm-6 col-sm-offset-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>'.$new['title'].'
                                </h3>
                            </div>
                            <div class="panel-body">
                                <p class="category">'.$new['category'].'  <span class="time">'.$new['created'].'</span></p>
                                <p>'.$new['content'].'</p>
                             </div>
                        </div>
                    </div>';
            }
        ?>
    </div>
</div>


</html>