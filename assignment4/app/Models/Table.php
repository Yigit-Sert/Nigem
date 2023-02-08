<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $table = 'table_information';
    protected $fillable = ['productnaam', 'verkocht', 'populariteit', 'omzet', 'percentageTotaal'];
    public $timestamps = false;
}
