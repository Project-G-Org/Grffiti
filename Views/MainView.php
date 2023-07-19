<?php

namespace Views;

/**
 * @namespace View
 */
class MainView
{
    public function __construct(
        private $fileName,
        private $header = 'header',
        private $footer = 'footer',
    ) {}

    public function render(array $pageData = []): void
    {
        // $pageData['header'] = (
        //     LoginModel::isLoggedIn() ? 
        //     ($_SESSION["position"] == POSITIONS['ADMIN'] ? "adminHeader" : "header") :
        //     "header"
        // );
        
        include 'Templates/' . $this->header . '.php';
        include 'Pages/' . $this->fileName . '.php';
        include 'Templates/' . $this->footer . '.php';
    }
}
