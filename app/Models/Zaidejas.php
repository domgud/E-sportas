<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zaidejas extends Model
{
    use HasFactory;
    protected $table = 'zaidejas';
    protected $fillable = ['vardas', 'pavarde', 'pozicija', 'slapyvardis', 'pilietybe', 'prisijunge_nuo', 'id_ZAIDEJAS', 'fk_KOMANDAid_KOMANDA'];
    public $timestamps = false;
}
