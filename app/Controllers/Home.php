<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}

//    public function index()
  //  {
  //    $valor=[
  //          "test"=> "ejemplo",
  //          "test1" => "ejemplo",
 //           "id"=> 1       
 //     ];

//        $db=\Config\Database::connect();
//        $query=$this ->$db->query("SELECT * FROM estudiantes;");
//
 //       $valor=($query ->getResult());
//        $resultado=$query->getResult();
//         return $this -> response ->setJSON ($valor);
//    return $this -> response -> setJSON ($valor);

//    }
//}