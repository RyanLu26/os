<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Subcategory;

class FrontendController extends Controller
{
    public function home($value=''){

    	$items = Item::orderBy('id','desc')->take(6)->get();
    	// dd($items);
    	return view('frontend.home',compact('items'));
    }

    public function getItems(Request $request){

      $id = $request->sid;
      if ($id == 0) {
          $items = Item::all();
      }else{
        $items = Subcategory::find($id)->items;
      }
      return $items;

    }

    public function filteritem($value='')
    {   
        $subcategories = Subcategory::orderBy('id')->take(3)->get();
    	return view('frontend.items',compact('subcategories'));
    }

     public function detailitem($id)
    {   
         $item = Item::find($id);
    	return view('frontend.detail',compact('item'));
    }

     public function login($value='')
    {
    	return view('frontend.login');
    }

    public function checkout($value='')
    {
    	return view('frontend.checkout');
    }

    public function register($value='')
    {
    	return view('frontend.register');
    }

    public function about($value='')
    {
    	return view('frontend.about');
    }

    public function profile($value='')
    {
    	return view('frontend.profile');
    }
}
