<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    /**
     * Fillable fields for array
     * @var array
     */
    protected $fillable = [
        'street',
        'city',
        'state',
        'country',
        'zip',
        'price',
        'description'
    ];

    /**
     * A flyer is composed of many photos
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function scopeLocatedAt($query, $zip, $street)
    {
        $street = str_replace('-',' ', $street);
        return $query->where(compact('zip', 'street'));
    }

    public function getPriceAttribute($price)
    {
        return '$'.number_format($price);
    }
}
