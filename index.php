<?php
/**
 * @author Gabriel Spinola <email>
 * @author Lucas Vinicius <email>
 * 
 * # Plano B
 * ## STACK Front
 * - Htmx
 * - JS -> Jquery
 * - CSS -> Tailwind (!Bootstrap)
 * 
 * ## Stack Back
 * - PHP | Python (!Go, Rust)
 * - MySql
 * 
 * # Plano A
 * ## STACK Front
 * - Svelte
 * - Twailwind (SCSS)
 * 
 * ## STACK Back
 * - Laravel (PHP) | Python
 * - MySql
 * 
 * # Arquitetura
 * - MVC
 *
 * Tema: Grafite, Arte de rua
 * Objetivo: Criador de graffite, divulgação e vendas
 * 
 * ## REFS
 * [Os Gemeos](http://www.osgemeos.com.br/pt) 
 * [Eduardo Kobra](https://www.eduardokobra.com/) 
*/

session_start();

// ---------------------------------------------------------
// Constants
const INCLUDE_PATH = 'http://localhost:8080/Grffiti/';

const DATABASE_HOST = 'localhost:3307';
const DATABASE_NAME = 'db_grffiti';
const DATABASE_USER = 'root';
const DATABASE_PASSWORD = '';

enum Positions: string {
    case User = 'USER';
    case Admin = 'ADMIN';
};

// ---------------------------------------------------------
// Imports
require "Database.php";

use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\PostController;

// ---------------------------------------------------------
// Autoload
$autoload = function (string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController(pageName: 'home');
$postController = new PostController(pageName: 'post');
$loginController = new LoginController(pageName: 'login');

// ---------------------------------------------------------
// Router
$homeController -> addRoute('/', $homeController);
$postController -> addRoute('/post', $postController);
$loginController -> addRoute('/login', $loginController);