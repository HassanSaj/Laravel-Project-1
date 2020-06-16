<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator, Redirect, Response, File;
use Socialite;
use App\User;
class AuthController extends Controller
{

    //this function redirect() it will redirect to social media login page.
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    //this function callback it will get information from social media & login into application
    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->stateless()->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('/');
    }

    //this function createUser() it will register the social media user into application database.
    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }


}
