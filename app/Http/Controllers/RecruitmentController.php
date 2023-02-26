<?php

namespace App\Http\Controllers;

use App\Models\Recruitment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RecruitmentController extends Controller
{
    public function index(Recruitment $recruitment)//インポートしたrecruitmentをインスタンス化して$recruitmentして使用。
    {
        return view('posts/recruitments/index')->with(['recruitments' => $recruiment->getPaginateByLimit()]);  
    }
    
    public function create(Recruitment $recruitment)
    {
        return view('posts/recruitments/create');
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
    
}
