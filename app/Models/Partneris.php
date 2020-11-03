<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partneris extends Model
{
    use HasFactory;
    protected $table = 'partneris';
    protected $fillable = ['svetaine', 'ikurimo_metai', 'valstybe', 'pagrindine_rinka', 'pavadinimas', 'id_PARTNERIS'];
    public $timestamps = false;

}
