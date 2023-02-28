<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RecruitmentController extends Controller
{
    public function index(Recruitment $recruitment, Place $place) //インポートしたrecruitmentをインスタンス化して$recruitmentして使用。
    {
        return view('posts/recruitments/index')->with(['recruitments' => $recruitment->getPaginateByLimit(), 'places' => $place->get()]);  
    }
    
    public function create(Recruitment $recruitment, Place $place)
    {
        return view('posts/recruitments/create')->with(['places' => $place->get()]);
    }
    
    public function show(Recruitment $recruitment)
    {
        return view('posts/recruitments/show')->with(['recruitment' => $recruitment]);
    }
    
    public function store(Request $request, Recruitment $recruitment)
    {   
        
        $input = $request['recruitment'];
        $recruitment->user_id = Auth::id();
        $recruitment->fill($input)->save();
        

        
        return redirect('/recruitments/' . $recruitment->id);//redirectは保存した後に表示される頁
    }
    
    public function search(Request $request)
    {
        return view('posts/recruitments/index')->with(['recruitments' => Recruitment::where("place_id", $request->place_id)->get() ]);
        Recruitment::where("place_id", $request->place_id)->get(); //requestできたplace_idと同じplace_idをDbから取得
    }
    
    
}
