<?php

namespace App\Controllers;
use App\Models\MyModel;


class Mycontroller extends BaseController

{
    public function index()
    {   
    	$myobj =new MyModel();
    	$myobj->mymethod(1,2);
    	 	die();
    	$data['key']=180;
        return view('home',$data);
        //echo "second  Controller";
    }
}

?>