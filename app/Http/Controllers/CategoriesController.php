<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Owner;

class CategoriesController extends Controller
{
    public function category(Request $request){
        if($request->category =='owner'){
            $search=Owner::where('name','like','%'.$request->value.'%')->get();
            if((count($search)!=0)){
                Building::where('user_id',$search[0]->id)->get();
                return response($search);
            }else if(count($search)==0){
                $message=[
                    'message'=>'search not found'
                ];
                return response($message,404);
            }
        }
        else if($request->category =='price'){
                $search=Building::whereBetween('prices',[2,$request->value])->get();
            if((count($search)!=0)){
                Owner::where('id',$search[0]->user_id)->get();
                return response($search);
            }else if(count($search)==0){
                $message=[
                    'message'=>'search not found'
                ];
                return response($message,404);
            }
        }else if($request->category =='rooms'){
            $search=Building::where('Number_of_rooms',$request->value)->get();
            if((count($search)!=0)){
                Owner::where('id',$search[0]->user_id)->get();
                return response($search);
            }else if(count($search)==0){
                $message=[
                    'message'=>'search not found'
                ];
                return response($message,404);
            }
        }

    }
}
// "Additional_information": "This house is suited for anyone who wants something simple, comfortable and not expensive. It speaks royalty with an indoor swimming pool and a fireplace",
// "Additional_information": "This house is best suited for a football lovers, it has an outdoor and indoor football court. ",
// "Additional_information": "This is an exquisite  beach house with an outdoor cooking area, swimming pool and a tennis court. If you are an outdoor-indoor lover this is for you.",
