<?php

namespace App\Http\Controllers;

use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index(){
        $table = Table::all();
        return view('table',compact('table'));
    }
}
