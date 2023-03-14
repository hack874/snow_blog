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
    
    public function show(Recruitment $recruitment, Place $place)
    {
        return view('posts/recruitments/show')->with(['recruitment' => $recruitment, 'place' => $place]);
    }
    
    public function store(Request $request, Recruitment $recruitment)
    {   
       
        $input = $request['recruitment']; //$input,$requestは入力された値.$recruitmentは保存された後の値
        $recruitment->user_id = Auth::id();
        $recruitment->fill($input)->save(); 
       
        
        

        
        return redirect('/recruitments/' . $recruitment->id);//redirectは保存した後に表示される頁
    }
    
    public function search(Request $request, Place $place, Recruitment $recruitment)
    {   
        
        $search_place = $request->place_id;
        $search_date = $request->date;
        
        
        return view('posts/recruitments/index')->with([
            'search_recruitments' => Recruitment::where("place_id", $search_place)->whereDate('date', $search_date)->get(),//requestできたplace_idと同じplace_idをDbから取得
            'places' => $place->get(),
            'recruitments' => $recruitment->getPaginateByLimit(5)
            ]); 
    }
    public function delete(Recruitment $recruitment)
    {
        $recruitment->delete();
        return redirect('/recruitments');
    }
    
    
}
