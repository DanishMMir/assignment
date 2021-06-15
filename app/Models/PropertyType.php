<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
    ];

    public function property(){
        return $this->belongsTo(Property::class);
    }
}
