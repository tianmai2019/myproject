<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrowdfundingController extends Controller
{
    //众筹页面
    public function index(){
        return view('mobile.crowdfunding.index');
    }

    //还款计划
    public function repayment(){
        return view('mobile.crowdfunding.repayment');
    }
}
