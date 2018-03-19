<?php
require "vendor/autoload.php";

class db {
    function __construct(){
        $this->config   = new config();
        $this->PDO      = new PDO("mysql:host=".$this->config->host.";dbname=".$this->config->dbname.";charset=utf8mb4", $this->config->dbuser, $this->config->dbpassword);
    }
}

class system{
    function __construct(){
        $this->db   = new db();
        preg_match_all('/\/(\w+)/',explode("?",$_SERVER['REQUEST_URI'])[0],$this->uri);
        $this->uri  = $this->uri[1];
        $this->session  = $_SESSION;
        $this->cookie   = $_COOKIE;
        $this->post     = $_POST;
        $this->get      = $_GET;
    }
}


class page extends page_data
{
    protected function uri()
    {
        $k = new system();
        return $k->uri;
    }
    protected function maxuri($i,$back="")
    {
        $k = new system();
        if(count($k->uri)>$i)
        {
            header("location: /$back");
        }
    }
}



?>
