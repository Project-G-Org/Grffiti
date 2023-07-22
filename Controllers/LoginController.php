<?php 

namespace Controllers;

use Helpers\Response;
use Helpers\Router;
use Models\UserFields;
use Models\UserModel;
use MySql;

class LoginController extends Controller { 
    use Router;

    public function __construct(
        protected string $pageName = "",
    ) {
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

    public function register() {

    }

    public function rememberMe(string $user, string $password, int $position): void {
        $user = $this -> model -> findData($user, $password);

        if ($user->rowCount() == 1) {
            self::initSession($user, $password, $position);
        }
    }
}