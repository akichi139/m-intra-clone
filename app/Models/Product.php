<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = [];

    protected function supervise(): Attribute{
        return Attribute::make(
            get: fn ($value) => explode(',', $value),
            set: fn ($value) => implode(',', $value),
        );
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function brand() : BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function saleorder() : BelongsToMany
    {
        return $this->belongsToMany(SaleOrder::class, 'product_saleorder');
    }

    public function supervisor() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
