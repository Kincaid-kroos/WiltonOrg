<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    //Relationship between assets and department where the department can have many assets
    public function assets(): HasMany
    {
        return $this->hasMany(Asset::class);
    }
}
