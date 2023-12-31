<?php 

namespace Controllers;

use Exception;
use Helpers\Response;
use Helpers\Router;
use Helpers\ImageUploader;
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

        try {
            $profilePic = ImageUploader::receiveUserImageFromPost('profile_pic');
        } catch (Exception $e) {
            // TODO if exception caught user Helpers\Response to display error to client
            // or give the option to use the default profile pic
            echo $e->getMessage();
            $profilePic = '';
        }

        $this -> model -> insertData([
            $username, $password, $description, Positions::User->value, $profilePic
        ]);
    }

    public function rememberMe(string $user, string $password, int $position): void {
        $user = $this -> model -> findData($user, $password);

        if ($user->rowCount() == 1) {
            self::initSession($user, $password, $position);
        }
    }
}