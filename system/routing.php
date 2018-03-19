<?php
foreach (glob("app/function/*.php") as $filename)
{
    include $filename;
}

$config = new system();

if(isset($config->uri[0])){
    if(is_file("app/php/".$config->uri[0].".php")){
        include "app/php/".$config->uri[0].".php";
        $k = new $config->uri[0];
        $k->index();
    }else{
        header("location: /");
    }
}else{
    include "app/php/home.php";
    $k = new home;
    $k->index();
}

?>