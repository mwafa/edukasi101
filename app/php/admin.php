<?php

class admin extends page
{
    private $path = "app/layout/admin/";
    private $page = array(
        "dashboard",
        "profile",
        "siswa"
    );

    function __construct()
    {
        $this->default['title'] = "Admin: ".ucfirst(end($this->uri()));
    }

    public function index()
    {
        $page_now = $this->uri()[1];
        if(in_array($page_now,$this->page)){
            $this->$page_now();
        }else{
            header("location: /admin/dashboard");
        }
    }

    public function dashboard()
    {
        $this->maxuri(2,"admin");
        include $this->path."header.php";
        include $this->path."dashboard.php";
        include $this->path."footer.php";
    }
    
    public function profile()
    {
        $this->maxuri(2,"admin");
        include $this->path."header.php";
        include $this->path."profile.php";
        include $this->path."footer.php";
    }

    public function siswa()
    {
        $this->maxuri(2,"admin");
        include $this->path."header.php";
        include $this->path."input_data.php";
        include $this->path."data.php";
        include $this->path."footer.php";

    }
}