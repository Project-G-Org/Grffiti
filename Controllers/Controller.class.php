<?php

namespace Controllers;

use Views\MainView;

abstract class Controller {
    /** Reference to a view class*/
    protected object $view;

    /** Reference to a model class */
    protected object $model;

    /** Execution function */
    public function execute(string $pageName): void {
        $this -> view = new MainView($pageName);
        $this -> view -> render(['css' => $pageName . '.css']);
    }
}