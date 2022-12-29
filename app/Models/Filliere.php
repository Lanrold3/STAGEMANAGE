<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\isEmpty;

class Filliere extends Model
{
    use HasFactory;
    protected $fillable=["name"];
    protected $primaryKey=["id"];
    protected $places=null;
    protected $departement=null;
    protected $enterprises=null;

    /**
     * Show the departement of the filliere.
     *
     * @return Collection::class
     */
    public function departement()
    {
        if(isEmpty($this->departement))
        {
            $this->departement=$this->hasOne(Department::class);
        }
        return $this->departement;
    }
    /**
     * Show enterprises that have places for the filliere.
     *
     * @return Collection::class
     */
    public function enterprises()
    {
        if(isEmpty($this->enterprises))
        {
            $this->enterprises=$this->hasManyThrough(Enterprise::class,Filliere_Enterprise::class,"filliere_id","enterprise_id","id","id");
        }
        return $this->enterprises;
    }
    public function places()
    {
        $places=0;
        if(isEmpty($this->places))
        {
            $filliere_interprises=$this->hasMany(Filliere_Enterprise::class,"filliere_id","id");
            $this->places=$filliere_interprises->sum("number_place");
        }
        return $this->places;
    }
    public function remain_places()
    {
        return null;
    }
}
