<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Partner;
use App\Models\Owner;
class Team extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['name', 'year', 'country', 'owner_id'];

    public function partners(){
        return $this->belongsToMany(Partner::class);
    }

    public function owner(){
        return $this->belongsTo(Owner::class);
    }
}
