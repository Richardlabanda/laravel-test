<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateRecord extends Controller
{
    public static function update(Request $request) {
        $updated = DB::table("users")
        ->where("id", $request["id"])
        ->update([
            "Fname" => $request['Fname'],
            "Lname" => $request['Lname'],
            "email" => $request['Email']
        ]);
        if($updated) {
            return [
                "success"   => true,
                "message"   => "Successfully updated"
            ];
        }

        else {
            return [
                "success"   => false,
                "message"   => "Failed to update"
            ];
        }
    }
}
