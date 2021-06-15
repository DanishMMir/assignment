<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'county',
        'country',
        'town',
        'description',
        'details_url',
        'address',
        'image_full',
        'image_thumbnail',
        'latitude',
        'longitude',
        'num_bedrooms',
        'num_bathrooms',
        'price',
        'type',
        'property_type',
        'post_code'
    ];

    public function property_type(){
        return $this->hasOne(PropertyType::class);
    }
}
