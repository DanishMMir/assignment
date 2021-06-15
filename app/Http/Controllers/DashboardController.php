<?php


namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    public function indexAction(){
        return view('dashboard');
    }

    public function propertyListAction(){
        $properties =  Property::select(
            'id',
            'uuid',
            'county',
            'country',
            'town',
            'description',
            'address',
            'latitude',
            'longitude',
            'num_bedrooms',
            'num_bathrooms',
            'price',
            'type',
            'property_type')->get()->toArray();
        $propertyType =  PropertyType::select(
            'id',
            'title')->get()->toArray();

        foreach ($properties as &$property){
            foreach ($propertyType as $type){
                if($property['property_type'] == $type['id']){
                    $property['property_type']   = $type['title'];
                }
            }
        }
        $properties = [
            "data" => $properties
        ];

        return json_decode(json_encode(json_encode($properties)));
    }

    public function editAction(Request $request, int $id){
        $property =  Property::where('id',$id)->get()->toArray();
        $propertyType = PropertyType::all()->toArray();
        $property = reset($property);
        $file = '';
        if (is_dir(storage_path('images/thumb')) && $handle = opendir(storage_path('images'))) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && $id == substr($entry,0,strpos($entry,'_'))) {
                    $file = $entry;
                }
            }
            closedir($handle);
        }
        return view('edit', compact('property', 'propertyType', 'file'));
    }

    public function deleteAction(Request $request, $id)
    {
        $property = Property::find($id);
        if ($property->delete()){
            return back()->with('success','Properties successfully deleted.');
        }

        return back()->with('error','Error deleting properties.');
    }

    public function updateProperty(Request $request){

        if (!empty($_FILES["image"]['name'])){
            $this->saveImage($_FILES["image"], $request->get('id'));
        }
        $property = Property::updateOrCreate(
            ['id' => $request->get('id')],
            [
                'county' => $request->get('county'),
                'country' => $request->get('country'),
                'town' => $request->get('town'),
                'description' => $request->get('description'),
                'address' => $request->get('address'),
                'post_code' => $request->get('post_code'),
                'num_bedrooms' => $request->get('num_bedrooms'),
                'num_bathrooms' => $request->get('num_bathrooms'),
                'price' => $request->get('price'),
                'type' => $request->get('type'),
                'property_type' => $request->get('property_type')
            ]
        );
        if ($property->save()){
            return back()->with('success','Properties successfully updated.');
        }

        return back()->with('error','Error updating properties.');
    }

    private function saveImage($image, $id){
        $errors=[];

        //get provided file information
        $fileName    = $image['name'];
        $fileExtArr  = explode('.',$fileName);
        $fileExt     = strtolower(end($fileExtArr));
        $fileSize    = $image['size'];
        $fileTmp     = $image['tmp_name'];

        //which files we accept
        $allowed_files = ['jpg','png','gif'];

        //validate file size
        if($fileSize > (1024*1024*2)){
            $errors[] = 'Maximum 2MB files are allowed';
        }

        //validating file extension
        if(!in_array($fileExt,$allowed_files)){
            $errors[] = 'only ('.implode(', ',$allowed_files).') files are allowed.';
        }


        //before uploading we will look at errors array if empty
        if(empty($errors)){
            if(!is_dir(storage_path('images'))){
                if (!mkdir($concurrentDirectory = storage_path('images')) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
                if (!mkdir($concurrentDirectory = storage_path('images/thumb')) && !is_dir($concurrentDirectory)) {
                    throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
                }
            }

            move_uploaded_file($fileTmp, storage_path('images/'.$id.'_'.$fileName));

            $this->createThumb(storage_path('images/'.$id.'_'.$fileName),$fileExt,storage_path('images/thumb/'.$id.'_thumb_'.$fileName),200,200);
        }else{
            return back()->with('error','Error uploading file.');
        }
    }

    //function to create thumbnail
    private function createThumb($target,$ext,$thumb_path,$w,$h)
    {
        list($w_orig, $h_orig) = getimagesize($target);
        $scale_ratio = $w_orig / $h_orig;
        if (($w / $h) > $scale_ratio)
            $w = $h * $scale_ratio;
        else
            $h = $w / $scale_ratio;

        if ($w_orig <= $w) {
            $w = $w_orig;
            $h = $h_orig;
        }
        $img = "";
        if ($ext == "gif")
            $img = imagecreatefromgif($target);
        else if ($ext == "png")
            $img = imagecreatefrompng($target);
        else if ($ext == "jpg")
            $img = imagecreatefromjpeg($target);

        $tci = imagecreatetruecolor($w, $h);
        imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
        imagejpeg($tci, $thumb_path, 80);
        imagedestroy($tci);
    }
}
