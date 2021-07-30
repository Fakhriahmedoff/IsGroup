<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PageResource;
use App\Seo;
use App\Models\Car;
use App\Location;
use App\Letter;
use App\Models\Brand;
use App\Slider;
use App;
class PagesController extends Controller
{

    public function homepage($lang){
     
    }

    public function getSingleCarPage($lang){
        if($lang == 'az'){
            return  Seo::where('page_id',999)->first()->slug_az;
        }elseif($lang == 'ru'){
            return  Seo::where('page_id',999)->first()->slug_ru;
        }else{
            return  Seo::where('page_id',999)->first()->slug_en;
        }
    }
    public function getCarData($parameter){
        return Car::where('slug', $parameter)->withTranslations()->first();
    }
    
    public function getCars($parameter){
        if($parameter == null){
            return Car::orderBy('price', 'ASC')->withTranslations()->paginate(12);
        }else{
            return Car::where('class',$parameter)->orderBy('price', 'ASC')->withTranslations()->paginate(12);
        }
    }
    public function getLocations(){
        return Location::orderBy('id', 'ASC')->withTranslations()->get();
    }

    public function getClassOne(){
        return  Car::where('class', 'econom')->withTranslations()->get();
    }
    public function getClassTwo(){
        return  Car::where('class', 'premium')->withTranslations()->get();
    }
    public function getClassThree(){
        return  Car::where('class', 'bandm')->withTranslations()->get();
    }
    public function getClassFour(){
        return  Car::where('class', 'crossover')->withTranslations()->get();
    }
    public function getClassFive(){
        return  Car::where('class', 'business')->withTranslations()->get();
    }
    public static function getLink($id){
        $lang = App::getlocale();
            $data = Seo::where("page_id", $id)->first();
            if($lang == "az"){
                return $data->slug_az;
            }
            if($lang == "en"){
                return $data->slug_en;
            }
            if($lang == "ru"){
                return $data->slug_ru;
            }    
           
    }
    public function getPage($slug,$carslug = null){
        $lang = App::getlocale();
        if($lang == "az"){
            $page = Seo::where("slug_az", $slug)->first();
        }
        if($lang == "en"){
            $page = Seo::where("slug_en", $slug)->first();
        }
        if($lang == "ru"){
            $page = Seo::where("slug_ru", $slug)->first();
        }
         if($slug = ""){
             $page = Seo::first();
         }
   
         $singleCar = $this->getCarData($carslug);
         if($singleCar == null){
            $dynamicClass = null;
         }else{
            
             $dynamicClass = Car::where('class', $singleCar->class)->get(); 
         }
      
        $cars = $this->getCars($carslug);
        $carseo = $this->getSingleCarPage($lang);
        $locations = $this->getLocations();
        $econom = $this->getClassOne();
        $premium = $this->getClassTwo();
        $business = $this->getClassFive();
        $view = $page->viewname;
        $sliders = Slider::orderby('id', 'ASC')->get();
        $brands = Brand::get();
        $feedback = Letter::get();
        $seos = Seo::orderby('id')->where('featured',1)->get();
        $pagescollection = PageResource::collection($seos);
        $pagess = $pagescollection->toArray($seos);
        return   view('Front.'.$view,)->with([
                'pagess'=> $pagess, 
                'page'=>$page, 
                'car' => $singleCar, 
                'dynamicClass' => $dynamicClass,
                'cars' =>$cars, 
                'brands' => $brands,
                'carseo' => $carseo, 
                'locations'=>$locations, 
                'econom'=>$econom,
                'premium' =>$premium,
                'business' =>$business,
                'letters' => $feedback,
                'sliders' => $sliders
            ]);
    }


    public static function getBrandById($id){
        $data = Brand::where('id', $id)->first();
        return $data->name;
    }
    public static function getCarById($id){
        $data = Car::where('id', $id)->first();
        return $data->model;
    }
    public  function Locations(){
        return json_encode(Location::select('coordinat')->get(), JSON_INVALID_UTF8_IGNORE);
    }
}
