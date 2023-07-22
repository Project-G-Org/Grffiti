<?php 

namespace Controllers;

use Helpers\Response;
use Helpers\Router;
use Models\UserFields;
use Models\UserModel;
use MySql;
use Positions;

class LoginController extends Controller { 
    use Router;

    public function __construct(
        protected string $pageName = "",
    ) {
        parent::__construct($pageName);

        $this -> model = new UserModel(new MySql);
    }

    public static function initSession(string $user, string $password, string $position): void {
        $_SESSION['isLogged'] = true;
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        $_SESSION['position'] = $position;
    }

    public static function isLogged(): bool {
        return isset($_SESSION['isLogged']);
    }

    public static function logout(): void {
        session_destroy();
        setcookie('remember', 'true', time() - 1, '/');
        
        header('Location:' . INCLUDE_PATH);
        die;
    }

    public function login(): void {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this -> model -> findData($username, $password);

        if ($user->rowCount() == 1) {
            $info = $user -> fetch();
            echo "<h2>".$info[UserFields::$position]."</h2>";
            self::initSession($username, $password, $info[UserFields::$position]);

            header('Location: ' . INCLUDE_PATH);
            die; 
        }

        Response::simpleResponse('error', 'Nome de usuário ou senha incorretos');
    }

    public function register(): void {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $description = $_POST['description'];

        $targetDir = 'Assets/';
        $target_file = $targetDir . basename($_FILES["profile_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["profile_pic"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    
        $image = basename($_FILES["profile_pic"]["name"], ".png"); // used to store the filename in a variable

        echo "<h2>AAAAAA</h2>";

        $this -> model -> insertData([
            $username, $password, $description, 'USER', $image
        ]);
    }

    public function rememberMe(string $user, string $password, int $position): void {
        $user = $this -> model -> findData($user, $password);

        if ($user->rowCount() == 1) {
            self::initSession($user, $password, $position);
        }
    }
}

trait ImageUploader {

}