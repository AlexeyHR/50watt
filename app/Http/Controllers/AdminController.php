<?php

namespace App\Http\Controllers;

use App\Models\Telephone;

class AdminController extends Controller
{
    public function index()
    {
        $data = Telephone::select('telnumber')->get();
        // dd($data);
        return view('admin.panel', ['phones' => $data]);
    }
}
