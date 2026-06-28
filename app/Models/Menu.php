<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    "type",
    "label",
    "href",
    "route",
    "icon",
    "aclass",
    "badge",
    "parent",
])]
#[Table('menu')]
class Menu extends Model
{
    protected $primaryKey = 'id';

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent', 'id');
    }
}
