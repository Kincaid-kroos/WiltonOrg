<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'model', 'serial_number', 'description', 'department_id'];
    
    //relationship
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
