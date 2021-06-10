<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $table = "User";
    public function prestec(){
        return $this->hasOne(prestecs::class);
    }
}
