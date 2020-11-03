<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komanda extends Model
{
    use HasFactory;
    protected $table = 'komanda';
    protected $fillable = ['pavadinimas', 'ikurimo_metai', 'valstybe', 'id_KOMANDA', 'fk_SAVININKASid_SAVININKAS'];
    public $timestamps = false;
}
