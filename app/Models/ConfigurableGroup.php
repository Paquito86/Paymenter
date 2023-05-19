<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConfigurableGroup extends Model
{
    use HasFactory;
    protected $table = 'configurable_option_groups';
    protected $fillable = [
        'name',
        'description',
        'products',
    ];
    protected $casts = [
        'products' => 'array',
    ];

    public function configurableOptions()
    {
        return $this->hasMany(ConfigurableOption::class, 'group_id', 'id');
    }
}