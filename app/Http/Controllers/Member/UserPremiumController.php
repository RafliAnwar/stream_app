<?php

namespace App\Http\Controllers\Member;

use App\Models\UserPremium;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPremiumController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $userPremium = UserPremium::with('package')
        ->where('user_id', $userId)->first();

        if(!$userPremium){
            return redirect()->route('pricing');
        }
        return view('member.subscription', ['userPremium' => $userPremium]);
    }

    public function destroy($id){
        UserPremium::destroy($id);

        return redirect()->route('member.dashboard');
    }
}
