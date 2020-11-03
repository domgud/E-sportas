<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treneris extends Model
{
    use HasFactory;
    protected $table = 'treneris';
    protected $fillable = ['vardas', 'pavarde', 'ar_buves_zaidejas', 'amzius', 'pilietybe', 'id_TRENERIS', 'fk_KOMANDAid_KOMANDA'];
    public $timestamps = false;
}
