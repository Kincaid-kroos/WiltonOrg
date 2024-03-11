<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetIssuance extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'department_id'];

    //relationship between the asset and Assetissuance
    public function asset(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    //relationship between department and assetissuance
    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
