<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestecs extends Model
{
    use HasFactory;
    public $table = "prestecs";
    protected $primaryKey = 'id';
    
    public function user()
    {
        return $this->belongsTo(users::class, "users_id");
    }
    public function llibre()
    {
        return $this->belongsTo(llibres::class, "llibres_id");
    }
    

}
