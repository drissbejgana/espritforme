<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\App;


class CategoryController extends Controller
{
    //

    public function show($lang,$id,$subcat){
        App::setLocale($lang);

        $data=Category::with([
            'subcategories',
            'subcategories.typesubcategories',
        ])->where('id', $id)->first();
         
        return view('categories')->with('categories',$data)->with('subcat',$subcat);
    }

}
