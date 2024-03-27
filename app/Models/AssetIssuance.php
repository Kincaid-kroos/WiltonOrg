

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetIssuancee extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'department_id'];

    // Define the relationship with the Asset model
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    // Define the relationship with the Department model
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
