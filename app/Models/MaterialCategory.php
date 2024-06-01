<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property string $title
 * @property string $created_at
 * @property string $updated_at
 *
 */
class MaterialCategory extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'note'];

    public function materials(): HasMany
    {
        return $this->hasMany(Material::class, 'material_category_id');
    }
}
