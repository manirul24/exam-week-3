<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    
    public function index($id){

// Declare your variables and assign the values stated in Question

   $name = "Donal Trump";

   $age = "75";

//add three variables in $data variable as associative array with values stated in the question

   $data = [
    "id"=>$id,
    "name"=>$name,
    "age"=>$age
   ];

 
      //  return response()->json($data);

//Set your cookie variables stated in the question

$name="access_token";

$value = "123-XYZ";

$minutes = '1';

$path = '/';


$domain = $_SERVER['SERVER_NAME'];

$secure = "false";

$httpOnly = "true";

   //add the return statement with the response method along with $data and status-code and set the cookie stated in the question.

        return response($data)->cookie(
            $name,$value,$minutes,$path,$domain,$secure,$httpOnly
        )->setStatusCode(200);


}


}
