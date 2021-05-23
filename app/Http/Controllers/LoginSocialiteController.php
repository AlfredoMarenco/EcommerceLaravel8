<?php

namespace App\Http\Controllers;

use App\Models\SocialProfile;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginSocialiteController extends Controller
{
    public function redirect($drive)
    {
        return Socialite::driver($drive)->redirect();
    }

    public function callback($drive)
    {
        $userSocialite = Socialite::driver($drive)->user();
        $user = User::where('email', $userSocialite->getEmail())->first();

        if (!$user) {
            $user = User::create([
                'name' => $userSocialite->getName(),
                'last_name' => $userSocialite->getName(),
                'email' => $userSocialite->getEmail(),
            ]);
        }
        $social_profile = SocialProfile::where('social_id', $userSocialite->getId())->where('social_name', $drive)->first();

        if (!$social_profile) {
            SocialProfile::create([
                'user_id' => $user->id,
                'social_id' => $userSocialite->getId(),
                'social_name' => $drive,
                'social_avatar' => $userSocialite->getAvatar(),

            ]);
        }

        auth()->login($user);

        return redirect()->route('index');
    }
}
