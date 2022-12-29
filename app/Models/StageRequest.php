<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageRequest extends Model
{
    use HasFactory;
    protected $fillable=["etudiant_name","etudiant_mail"];
    protected $primaryKey=["id"];

    public function is_valid()
    {
        return $this->is_valid;
    }
}
