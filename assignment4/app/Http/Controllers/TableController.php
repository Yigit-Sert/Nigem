<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{

    public function create(){
        $table = new Table;

        $table->productnaam = 'product name';
        $table->verkocht = '4';
        $table->populariteit = '1';
        $table->omzet = '40';
        $table->percentageTotaal = 1;

        $table->save();
    }

    public function read(){
        $table = Table::query()->get();
        return view('read', compact('table'));
    }

    public function home(){
        $table = Table::query()->get();
        return view('home', compact('table'));
    }

    public function bestellingen(){
        $table = Table::query()->get();
        return view('bestellingen', compact('table'));
    }
}
