<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable=["email","filiere","report_master","report","contact","enterprise","mat1","mat2"];
    protected $primaryKey=["id"];
    public $casts=[
        "email"=>"string",
        "mat1"=>"string",
        "mat2"=>"string",
        "enterprise"=>"string",
        "contact"=>"string",
        "filiere"=>"string",
        "report_master"=>"string",
        "report"=>"string",
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',

    ];

    public function getCasts()
    {
        if ($this->getIncrementing()) {
            return array_merge(["id" => "int"], $this->casts);
        }

        return $this->casts;
    }
}
