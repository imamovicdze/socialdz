<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: imamo-->
<!-- * Date: 8/26/2017-->
<!-- * Time: 3:45 PM-->
<!-- */-->
<?php
    $uri = $_SERVER['REQUEST_URI'];
?>

<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <?php
            if(!empty($user)){
                echo '<a class="navbar-brand" href="/pages/landing.php">SocialDz</a>';
            }
            else{
                echo '<a class="navbar-brand" href="/">SocialDz</a>';
            }
            ?>
        </div>
        <ul class="nav navbar-nav">
            <?php
            if(strpos($uri, "landing") !== false ) {
                echo('
                    <li class="active"><a href="/pages/landing.php">Home</a></li>
                    <li><a href="/pages/culture.php">Culture</a></li>
                    <li><a href="/pages/sport.php">Sport</a></li>
                    <li><a href="/pages/politics.php">Politics</a></li>
                    <li><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li><a href="news.php">Create News</a></li>');
                }
            }
            else if(strpos($uri, "sport") !== false){
                echo('
                    <li><a href="/pages/landing.php">Home</a></li>
                    <li><a href="/pages/culture.php">Culture</a></li>
                    <li class="active"><a href="/pages/sport.php">Sport</a></li>
                    <li><a href="/pages/politics.php">Politics</a></li>
                    <li><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li><a href="news.php">Create News</a></li>');
                }
            }
            else if(strpos($uri, "culture") !== false){
                echo('
                    <li><a href="/pages/landing.php">Home</a></li>
                    <li class="active"><a href="/pages/culture.php">Culture</a></li>
                    <li><a href="/pages/sport.php">Sport</a></li>
                    <li><a href="/pages/politics.php">Politics</a></li>
                    <li><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li><a href="news.php">Create News</a></li>');
                }
            }
            else if(strpos($uri, "politics") !== false){
                echo('
                    <li><a href="/pages/landing.php">Home</a></li>
                    <li><a href="/pages/culture.php">Culture</a></li>
                    <li><a href="/pages/sport.php">Sport</a></li>
                    <li class="active"><a href="/pages/politics.php">Politics</a></li>
                    <li><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li><a href="news.php">Create News</a></li>');
                }
            }
            else if(strpos($uri, "economy") !== false){
                echo('
                    <li><a href="/pages/landing.php">Home</a></li>
                    <li><a href="/pages/culture.php">Culture</a></li>
                    <li><a href="/pages/sport.php">Sport</a></li>
                    <li><a href="/pages/politics.php">Politics</a></li>
                    <li class="active" ><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li><a href="news.php">Create News</a></li>');
                }
            }
            else if(strpos($uri, "/news") !== false){
                echo('
                    <li><a href="/pages/landing.php">Home</a></li>
                    <li><a href="/pages/culture.php">Culture</a></li>
                    <li><a href="/pages/sport.php">Sport</a></li>
                    <li><a href="/pages/politics.php">Politics</a></li>
                    <li><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li class="active" ><a href="news.php">Create News</a></li>');
                }
            }
            else if(strpos($uri, "single-news") !== false){
                echo('
                    <li><a href="/pages/landing.php">Home</a></li>
                    <li><a href="/pages/culture.php">Culture</a></li>
                    <li><a href="/pages/sport.php">Sport</a></li>
                    <li><a href="/pages/politics.php">Politics</a></li>
                    <li><a href="/pages/economy.php">Economy</a></li>
                ');
                if($user['is_admin']){
                    echo('<li><a href="news.php">Create News</a></li>');
                }
            }

            ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php
                if(strpos($uri, "registration") !== false){
                    echo('<li><a href="/pages/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>');
                }
                else if(strpos($uri, "login") !== false){
                    echo('<li><a href="/pages/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>');
                }
                else if(strlen ( $uri) == 1){
                    echo('<li><a href="/pages/registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="/pages/login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>');
                }
                else{
                    echo(' <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
                            Welcome '.$user['name'].'
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="../../services/logoutService.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            </ul>
                          </li>');
                }
            ?>
        </ul>
    </div>
</nav>

