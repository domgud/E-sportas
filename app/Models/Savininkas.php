<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class savininkas extends Model
{
    use HasFactory;
    protected $table = 'savininkas';
    protected $fillable = ['vardas', 'pavarde', 'amzius', 'id_SAVININKAS'];
    public $timestamps = false;
}
