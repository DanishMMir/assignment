<?php


namespace App\Http\Controllers;

use App\Traits\GetProperties;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends BaseController
{
    use GetProperties;

    public function indexAction(){
        return view('homepage');
    }

    public function getPropertiesAction(){
        if ($this->handleProperties()){
            return back()->with('success','Properties successfully added.');
        }

        return back()->with('error','Error adding properties.');
    }
}
