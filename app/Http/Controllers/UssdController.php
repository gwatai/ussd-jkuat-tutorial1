<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UssdController extends Controller
{
    public function index()
    {
        // echo "PHP isn't not dead it is 20+ years old";

        header('Content-type: text/plain');
        $sessionId = FILTER_INPUT(INPUT_POST, "sessionId");
        $serviceCode = FILTER_INPUT(INPUT_POST, "serviceCode");
        $phoneNumber = FILTER_INPUT(INPUT_POST, "phoneNumber");
        $text = FILTER_INPUT(INPUT_POST, "text");

        // echo "CON 1.Register\n 2.Login\n 3. Forgot Password";
        if ($text == "") {

            echo "CON What would you like to check: \n 1. My account balance  \n 2. My Phone  Number "; 

        }

        else if ($text == "1") {
            // Business logic for first level response
           echo  "CON Choose account information you want to view \n 1. Account number \n";
        
        }
        else if ($text == "2") {
            // Business logic for first level response
            // This is a terminal request. Note how we start the response with END
            echo "END Your phone number is ".$phoneNumber;
        
        }
        else if($text == "1*1") { 
            // This is a second level response where the user selected 1 in the first instance
            $accountNumber  = "ACC1001";
        
            // This is a terminal request. Note how we start the response with END
           echo "END Your account number is ".$accountNumber;
        
        }

    }
}
