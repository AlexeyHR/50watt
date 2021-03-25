<?php

namespace App\Http\Controllers;

use App\Models\Telephone;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function someAction(Request $request)
    {
        // return "$request->tel<br><a href='/'>На главную</a>";
        $telephone = new Telephone();
        $telephone->telnumber = $request->tel;
        $telephone->save();

        $request->session()->flash('status', 'true');
        return redirect()->route('index');
    }
}
