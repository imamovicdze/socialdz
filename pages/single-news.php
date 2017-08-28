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

$newsId = $_GET['id'];

$new = $db->getNewsById($newsId);
$news = $db->getNewsAndCommentsById($newsId);
?>
<html>
<?php include_once("partials\head.php"); ?>

<?php include_once("partials\header.php"); ?>

<div class="container">
    <div class="row">
        <?php

        if($user['is_admin']){
            echo ' <div class="col-sm-6 col-sm-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>'.$new['title'].'
                                <span class="glyphicon glyphicon-remove-sign close" id="close" data-id="'.$new['ID'].'"  aria-hidden="true"></span>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <p class="category">'.$new['category'].'  <span class="time">'.$new['created'].'</span></p>
                            <p>'.$new['content'].'</p>
                         </div>
                    </div>
                </div>';
        }
        else{
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
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3> Comments </h3>
            </div>
            <?php
                if(!empty($news)){
                    foreach($news as $comment){
                        if($user['is_admin']){
                            echo '<div class="panel-body comment">
                            <p><strong>'.$comment['name'].' '. $comment['surname'] .'</strong> 
                            <span class="glyphicon glyphicon-remove-sign deletecomment"  data-id="'.$comment['commentid'].'"  aria-hidden="true"></span>
                            </p>
                            <p>'.$comment['text'].'</p>
                            <hr class="hrule">
                            <p><span class="date">Created: '.$comment['commentcreated'].'</span></p>
                        </div>';
                        }
                        else{
                            if($comment['userid'] == $user['ID']){
                                echo '<div class="panel-body comment">
                                <p><strong>'.$comment['name'].' '. $comment['surname'] .'</strong> 
                                <span class="glyphicon glyphicon-remove-sign deletecomment"  data-id="'.$comment['commentid'].'"  aria-hidden="true"></span>
                                </p>
                                <p>'.$comment['text'].'</p>
                                <hr class="hrule">
                                <p><span class="date">Created: '.$comment['commentcreated'].'</span></p>
                            </div>';
                            }
                            else{
                                echo '<div class="panel-body comment">
                                <p>
                                    <strong>'.$comment['name'].' '. $comment['surname'] .'</strong> 
                                </p>
                                <p>'.$comment['text'].'</p>
                                <hr class="hrule">
                                <p><span class="date">Created: '.$comment['commentcreated'].'</span></p>
                            </div>';
                            }
                        }

                    }
                }

            ?>
            <div class="panel-body">
                <form action="../services/createCommentService.php" method="POST" class="form-horizontal" id="register-form">
                    <div class="form-group ">  <!-- has-warning has-feedback -->
                        <label class="col-sm-3 control-label" for="content">News Content</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" id="text" name="text"></textarea>
                            <!--<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>-->
                        </div>
                        <input type="hidden" value="<?php echo $user['ID']; ?>" name="userId">
                        <input type="hidden" value="<?php echo $new['ID']; ?>" name="newsId">
                    </div>
                    <p>
                        <button class="btn btn-default" type="submit" >Post Comment</button>
                    </p>
                </form>
            </div>
        </div>
    </div>



    <?php
    // if User is not admin DONT import delete script
    if($user['is_admin']){
        echo '<script src="../assets/js/deleteNewsScript.js"></script>';
    }
    ?>
    <script src="../assets/js/deleteCommentScript.js"></script>
</div>


</html>