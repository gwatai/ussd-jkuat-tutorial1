<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UssdController extends Controller
{
    public function index()
    {
        
    header('Content-type: text/plain');
        $sessionId = FILTER_INPUT(INPUT_POST, "sessionId");
        $serviceCode = FILTER_INPUT(INPUT_POST, "serviceCode");
        $phoneNumber = FILTER_INPUT(INPUT_POST, "phoneNumber");
        $text= FILTER_INPUT(INPUT_POST, "text");

    echo "CON 1. Register\n 2. Login\n 3. Forgot Password";


    }
}
