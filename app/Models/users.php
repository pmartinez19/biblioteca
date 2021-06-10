<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $table = "users";
    public function prestec(){
        return $this->hasOne(prestecs::class);
    }
}
