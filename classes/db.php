<?php
/**
 * Created by PhpStorm.
 * User: imamo
 * Date: 27.8.2017.
 * Time: 14.39
 */

class db {
    private $host;
    private $user;
    private $password;
    private $dbName;
    private $dbh;

    public function __construct($host,$user,$password,$dbName)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbName = $dbName;

    }

    public function connect(){
       try{
           $this->dbh = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName, $this->user, $this->password);
           $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       } catch(PDOException $e) {
            var_dump($e->getMessage()); die();
       }

    }

    public function createUser($name,$surname,$email,$password){
        try {
            $sql = $this->dbh->prepare("INSERT INTO `users` (`name`, `surname`, `email`, `password`) VALUES (:name,:surname,:email,:password)");
            $sql->bindParam(':name', $name);
            $sql->bindParam(':surname', $surname);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':password', $password);

            $sql->execute();
        } catch(Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function getUserById($id){
        try{
            $sql = $this->dbh->prepare("SELECT * FROM users WHERE ID =" . $id);
            $sql->execute();
            $row = $sql->fetch();
            return $row;
        }catch (Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function getLastInsertedId(){
        return $this->dbh->lastInsertId();
    }

    public function getUserByEmail($email){
        try{
            $sql = $this->dbh->prepare("SELECT * FROM users WHERE email LIKE '" . $email . "'");
            $sql->execute();
            $row = $sql->fetch();
            return $row;
        }catch (Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function createNews($title,$content,$category){
        try {
            $sql = $this->dbh->prepare("INSERT INTO `news` (`title`, `content`, `category`) VALUES (:title,:content,:category)");
            $sql->bindParam(':title', $title);
            $sql->bindParam(':content', $content);
            $sql->bindParam(':category', $category);

            $sql->execute();
        } catch(Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function getAllNews(){
        try{
            $sql = $this->dbh->prepare("SELECT * FROM news");
            $sql->execute();
            $rows = $sql->fetchAll();
            return $rows;
        }catch (Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function getNewsAndCommentsById($id){
        try{
            $sql = $this->dbh->prepare("SELECT e.*, o.text, o.created AS commentcreated, o.ID AS commentid, u.name, u.surname, u.ID AS userid 
                                        FROM news e 
                                        INNER JOIN news_comments o ON e.ID = o.news_id 
                                        INNER JOIN users u ON o.user_id = u.ID 
                                        WHERE e.ID =". $id);
            $sql->execute();
            $row = $sql->fetchAll();
            return $row;
        }catch (Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function getNewsById($id){
        try{
            $sql = $this->dbh->prepare("SELECT * FROM news WHERE ID =" . $id);
            $sql->execute();
            $row = $sql->fetch();
            return $row;
        }catch (Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function getAllNewsByCategory($category){
        try{
            $sql = $this->dbh->prepare("SELECT * FROM news WHERE category LIKE '".$category."'");
            $sql->execute();
            $rows = $sql->fetchAll();
            return $rows;
        }catch (Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function deleteNewsById($id){
        try{
            $sql = $this->dbh->prepare("DELETE FROM news WHERE ID = ".$id);
            $sql->execute();
            return true;
        }catch (Exception $e){
            return false;
        }
    }

    public function createComment($user_id,$news_id,$text){
        try {
            $sql = $this->dbh->prepare("INSERT INTO `news_comments` (`user_id`, `news_id`, `text`) VALUES (:user_id,:news_id,:text)");
            $sql->bindParam(':user_id', $user_id);
            $sql->bindParam(':news_id', $news_id);
            $sql->bindParam(':text', $text);

            $sql->execute();
        } catch(Exception $e){
            var_dump($e->getMessage()); die();
        }
    }

    public function deleteCommentById($id){
        try{
            $sql = $this->dbh->prepare("DELETE FROM news_comments WHERE ID = ".$id);
            $sql->execute();
            return true;
        }catch (Exception $e){
            return false;
        }
    }


}