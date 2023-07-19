<?php

namespace Controllers;

use Views\MainView;
use Helpers\Router;

abstract class Controller {
    /** Reference to a view class */
    protected object $view;

    /** Reference to a model class */
    protected object $model;
    
    public function __construct(
        protected string $pageName,
    ) {}

    /** Execution function */
    public function execute(): void {
        $this -> view = new MainView($this -> pageName);
        $this -> view -> render(['css' => $this -> pageName . '.css']);
    }
}