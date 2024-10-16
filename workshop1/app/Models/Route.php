<?php 
 
namespace App\Models; 
 

use Illuminate\Database\Eloquent\Model; 
 
class Route extends Model 
{ 
    protected $fillable = ["name", "description", "startPoint", "finalPoint", "score", "location", "time"];

    public function getId() 
    { 
        return $this->attributes['id']; 
    } 
 
    public function setId($id)
    { 
        $this->attributes['id'] = $id; 
    } 
 
    public function getName(): string
    { 
        return $this->attributes['name']; 
    } 
 
    public function setName(string $name) : void
    { 
        $this->attributes['name'] = $name; 
    } 
 
    public function getDescription() 
    { 
        return $this->attributes['description']; 
    } 
 
    public function setDescription($description) 
    { 
        $this->attributes['description'] = $description; 
    } 
 

    public function getStartPoint() 
    { 
        return $this->attributes['startPoint']; 
    } 
 
    public function setStartPoint($startPoint) 
    { 
        $this->attributes['startPoint'] = $startPoint; 
    } 

    public function getFinalPoint() 
    { 
        return $this->attributes['finalPoint']; 
    } 
 
    public function setFinalPoint($finalPoint) 
    { 
        $this->attributes['finalPoint'] = $finalPoint; 
    } 

    public function getScore() 
    { 
        return $this->attributes['score']; 
    } 
 
    public function setScore($score) 
    { 
        $this->attributes['score'] = $score; 
    } 

    public function getLocation() 
    { 
        return $this->attributes['location']; 
    } 
 
    public function setLocation($location) 
    { 
        $this->attributes['location'] = $location; 
    } 

    public function getTime() 
    { 
        return $this->attributes['time']; 
    } 
 
    public function setTime($time) 
    { 
        $this->attributes['time'] = $time; 
    } 

    public function getImage() 
    { 
        return $this->attributes['image']; 
    } 
 
    public function setImage($image) 
    { 
        $this->attributes['image'] = $image; 
    } 
 
    public function getCreatedAt() 
    { 
        return $this->attributes['created_at']; 
    } 

} 

