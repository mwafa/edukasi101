<?php
namespace Daftar;
use db;

class Daftar_admin
{

    function __construct()
    {
        $this->acuan = array(
            "username"=> "/[a-zA-Z0-9._]{5,}$/",
            "password"=> "/.{5,}$/"
        );
    }

    public function set_data($dat)
    {
        foreach ($dat as $k=>$val)
        {
            if(in_array($k,array_keys($this->acuan)))
            {
                if(!preg_match($this->acuan[$k],$val))
                {
                    return false;
                }
            }
            $this->data[$k] = htmlentities($val); 
            if($k == "password")
            {
                $this->data[$k] = md5($val);
            }
        }
        return true;
    }

    public function insert2db()
    {
        $db = new db();
        return $db->PDO->query($this->q());
    }

    private function q()
    {
        $field = implode(",",array_keys($this->data));
        $value = "'".implode("','",$this->data)."'";
        return "insert into user($field) values($value)";
    }
}


?>