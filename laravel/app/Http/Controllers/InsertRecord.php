<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InsertRecord extends Controller
{
    public Static function insert(Request $request) {

        $Fname = $request['Fname'];
        $Lname = $request['Lname'];
        $email = $request['email'];

        $inserted = DB::table("users")
        ->insert([
            "Fname" => $Fname,
            "Lname" => $Lname,
            "email" => $email
        ]);

        if($inserted) {
            return [
                "success"   => true,
                "message"   => "Successfully registered"
            ];
        }

        else {
            return [
                "success"   => false,
                "message"   => "Failed to register"
            ];
        }

        return $request;

    }
}
