<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function members()
    {
        $member= Member::all();

        return view('pages.members',compact('member'));
    }
}