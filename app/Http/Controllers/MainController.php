<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Main;

class MainController extends Controller
{


    public function getContactData(Request $request)
    {
        $data = array_map(function ($el) {
            return addslashes(trim($el));
        }, $request->all());

        $result = Main::create($data);
        $success = ($result) ? true : false;
        return response()->json(['success' => $success]);
    }
}
