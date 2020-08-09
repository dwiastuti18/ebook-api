<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => 3103118050,
            "Name" => "Dwi Astuti",
            "Gender" => "Perempuan",
            "Phone" => 6285743006543,
            "Class" => "XII RPL 2",

        ];
    }
}