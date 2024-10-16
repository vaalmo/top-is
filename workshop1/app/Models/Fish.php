<?php 
 
namespace App\Models; 
 

use Illuminate\Database\Eloquent\Model; 
 
class Fish extends Model 
{ 

       /** 
     * FISH ATTRIBUTES 
     * $this->attributes['id'] - int - contains the fish primary key (id) 
     * $this->attributes['name'] - string - contains the fish name 
     * $this->attributes['species'] - string - contains the fish species
     * $this->attributes['weight'] - string - contains the fish weight
     */  

    protected $fillable = ["name", "species", "weight"];
    protected $table = 'fishes';

    public function getId()
    { 
        return $this->attributes['id']; 
    } 
 
    public function getName(): string
    { 
        return $this->attributes['name']; 
    } 
 
    public function setName(string $name) 
    { 
        $this->attributes['name'] = $name; 
    } 
 
    public function getSpecies(): string
    { 
        return $this->attributes['species']; 
    } 
 
    public function setSpecies(string $species) 
    { 
        $this->attributes['species'] = $species; 
    } 

    public function getWeight(): int
    { 
        return $this->attributes['weight']; 
    } 
 
    public function setWeight(int $weight)
    { 
        $this->attributes['weight'] = $weight; 
    } 
} 

