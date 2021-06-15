<?php


namespace App\Traits;


use App\Models\Property;
use App\Models\PropertyType;

trait GetProperties
{
    public function handleProperties(){
        $propertiesData = $this->getPropertiesData();
        return $this->persistProperties($propertiesData);
    }

    public function getPropertiesData(){
        $url = config('properties.url');
        $ch = curl_init();
        $headers = array(
            'Accept: application/json',
            'Content-Type: application/json',
        );
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);
    }

    private function persistProperties($propertiesData){
        foreach ($propertiesData->data as $property){
            $propertyType = PropertyType::firstOrCreate(
                ['title' => $property->property_type->title],
                ['description' => $property->property_type->description]
            );
//            TODO: Use bulk insert/ update
            $property = Property::firstOrNew(
                ['uuid'  =>  $property->uuid],
                [
                    'county'  =>  $property->county,
                    'country'  =>  $property->country,
                    'town'  =>  $property->town,
                    'description'  =>  $property->description,
                    'details_url'  =>  isset($property->details_url)?:null,
                    'address'  =>  $property->address,
                    'image_full'  =>  $property->image_full,
                    'image_thumbnail'  =>  $property->image_thumbnail,
                    'latitude'  =>  $property->latitude,
                    'longitude'  =>  $property->longitude,
                    'num_bedrooms'  =>  $property->num_bedrooms,
                    'num_bathrooms'  =>  $property->num_bathrooms,
                    'price'  =>  $property->price,
                    'type'  =>  $property->type,
                    'property_type'  =>  $propertyType->id

                ]
            );
            return $property->save();
        }
    }
}
