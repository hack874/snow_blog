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
    
    public function create()
    {
        return view('posts/recruitments/create');
    }
    
}
