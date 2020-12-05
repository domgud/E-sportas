<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;

class Player extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'lastname', 'position', 'nick', 'nationality', 'joined', 'team_id'];
    public function team(){
        return $this->belongsTo(Team::class);
    }
}
