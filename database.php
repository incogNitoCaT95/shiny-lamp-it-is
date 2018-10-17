<?php
session_start();

class Database {

    private $host = 'localhost';
    private $user = 'teo';
    private $pass = '8QmjNVa1h5E2CGdE';
    private $database = 'teo-articole';

    /**
     * @var PDO $dbh
     */
    private $dbh;

    public function __construct() {
        try {
            $this->dbh = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->pass);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    /**
     * @param $title
     * @param $content
     * @return int
     */
    public function saveArticle($title, $content) {
        global $id;

        $found = false;
        $articles = $this->getArticles();
        foreach($articles as $article) {
            if($article['id'] === $id) {
                $found = true;
                break;
            }
        }

        if($found) {
            $sql = "INSERT INTO `articles` (`title`, `content`) VALUES (?,?)";
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute([$title, $content]);
        } else {
            $sql = "UPDATE `articles` SET `articles`.`title` = ? AND `articles`.`content` = ? WHERE `articles`.`id` = ?";
            $stmt = $this->dbh->prepare($sql);
            $stmt->execute([$title, $content, $id]);
        }

        return $stmt->rowCount();
    }

    /**
     * @return mixed
     */
    public function getArticles() {
        $sql = "SELECT `ar`.`id`, `ar`.`title`, `ar`.`content` FROM `articles` `ar`";
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();

        $articles = [];
        $all = $stmt->fetchAll(PDO::FETCH_NAMED);
        foreach($all as $article) {
            $articles[$article['id']] = $article;
        }

        return $articles;
    }

    /**
     * @param $email
     * @param $username
     * @param $pass
     * @return int
     */
    public function createUser($email, $username, $pass) {
        $sql = "INSERT INTO `users` (`email`, `username`, `password`) VALUES (?,?,?)";
        $stmt= $this->dbh->prepare($sql);
        $stmt->execute([$email, $username, md5($pass)]);

        return $stmt->rowCount();
    }

    /**
     * @param $user
     * @param $pass
     * @return array
     */
    public function checkUser($user, $pass) {
        $sql = "SELECT * FROM `users` WHERE `users`.`email` = ? OR `users`.`username` = ? LIMIT 1";
        $stmt= $this->dbh->prepare($sql);
        $stmt->execute([$user, $user]);
        $user = $stmt->fetch(PDO::FETCH_NAMED);

        if(!empty($user) && $user['password'] === md5($pass)) {
            return $user;
        } else return [];
    }

    public function isUserAdmin() {
        $userId = $_SESSION['id'];

        return $userId == 1;
    }

    /**
     * @param $id
     * @return int
     */
    public function deleteArticle($id) {
        $sql = "DELETE FROM `articles` WHERE `articles`.`id` = ?";
        $stmt= $this->dbh->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}

$database = new Database();

$isAdmin = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;
