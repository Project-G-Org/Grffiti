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

const DATABASE_HOST = 'localhost:3306';
const DATABASE_DATABASE = 'db_patelandia';
const DATABASE_USER = 'root';
const DATABASE_PASSWORD = '';

const POSITIONS = [
    'USER' => 0,
    'ADMIN' => 1,
];
const POSITIONS_INT = [0, 1];

// ---------------------------------------------------------
// Imports
// require "Database.php";

use Controllers\HomeController;

// ---------------------------------------------------------
// Autoload
$autoload = function (string $className): void {
    require $className . '.php';
};

spl_autoload_register($autoload);

// ---------------------------------------------------------
// Controllers
$homeController = new HomeController();

// ---------------------------------------------------------
// Router
Helpers\Router :: get('/', function() use($homeController): void {
    $homeController -> execute();
});