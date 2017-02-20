<?php

/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 2/18/17
 * Time: 7:37 PM
 */
class DB
{
    private $host;
    private $login;
    private $password;
    private $dataBase;

    public function __construct($host='localhost',$login='root',$password='death9393',$dataBase='test')
    {
        $this->host=$host;
        $this->login=$login;
        $this->password=$password;
        $this->dataBase=$dataBase;
    }

    public function connectToDB(){
        return mysqli_connect($this->host,$this->login,$this->password,$this->dataBase);
    }

    public function getAll($sql){
        $resource = $this->connectToDB();
        mysqli_set_charset($resource,'UTF-8');
        $result = mysqli_query($resource,$sql);

        $tmp =[];

        if ($result==false){
            return false;
        }

        while ($row = mysqli_fetch_object($result)){
            $tmp[]=$row;
        }
        return $tmp;
    }
}
