<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StageRequest extends Model
{
    use HasFactory;
    protected $fillable=["mail1","mail2","mat1","mat2"];
    protected $primaryKey=["id"];
    public $casts=[
        "mail1"=>"string",
        "mail2"=>"string",
        "mat1"=>"string",
        "mat2"=>"string",
        "is_valid"=>"boolean",
        //"enterprise_id"=>"int",
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',

    ];
    public function is_valid1()
    {
        return $this->is_valid;
    }



    
    public function getCasts()
    {
        if ($this->getIncrementing()) {
            return array_merge(["id" => "int"], $this->casts);
        }

        return $this->casts;
    }
}
