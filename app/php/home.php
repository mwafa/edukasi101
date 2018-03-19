<?php

class home extends page
{
    function __construct()
    {
        $this->maxuri(1);
    }

    public function index()
    {
        include "app/layout/login.php";
        // $system = new system;
        // include "app/layout/header.php";
        // include "app/layout/home.php";
        // include "app/layout/footer.php";
    }
}
?>