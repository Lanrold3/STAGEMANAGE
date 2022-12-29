<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable=["name"];
    protected $primaryKey=["id"];

    public function fillieres()
    {
        return $this->hasMany(Filliere::class);
    }
    public function cd()
    {
        return $this->hasOne(User::class,"id");
    }
}
