<?php 

namespace Controllers;

use Helpers\Router;
use Models\UserModel;
use MySql;

class LoginController extends Controller { 
    use Router;

    public function __construct(
        protected string $pageName,
    ) {
        $this -> model = new UserModel(new MySql);
    }

    public static function initSession(string $user, string $password, int $position): void {
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

    public function rememberMe(string $user, string $password, int $position): void {
        $users = $this -> model -> findData();

        if ($users->rowCount() == 1) {
            self::initSession($user, $password, $position);
        }
    }
}