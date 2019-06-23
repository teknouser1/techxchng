<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use LinkedIn\Client;
use LinkedIn\Scope;
use LinkedIn\AccessToken;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

      /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        $client = new Client(
            '810phy2ng77uii',
            'xa1lGDVR1YVU87nO'
        );
        $client->setRedirectUrl('http://localhost/technoxchange/public/auth/linkedin/callback');
        //return Socialite::driver('linkedin')->redirect();
        $scopes = [
          Scope::READ_BASIC_PROFILE, 
          Scope::READ_EMAIL_ADDRESS,
          Scope::MANAGE_COMPANY,
          Scope::SHARING,
        ];
        $loginUrl = $client->getLoginUrl($scopes);
        return redirect($loginUrl);
    }


       /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback(Request $request)
    {
        $client = new Client(
            '810phy2ng77uii',
            'xa1lGDVR1YVU87nO'
        );
        $client->setRedirectUrl('http://localhost/technoxchange/public/auth/linkedin/callback');
        $accessToken = $client->getAccessToken($request->get('code'));
        $client->setAccessToken($accessToken);
        //$client->setApiRoot('https://api.linkedin.com/v2/');
        $profile = $client->get(
            'people/~:(id,email-address,first-name,last-name)'
        );

        $profile['name'] = $profile['firstName']." ".$profile['lastName'];

        
        return view('auth.linkedin-buyer',compact('profile'));
       /* $user = User::findOrFail($profile['emailAddress']);

        if(!empty($user) && count($user) > 0){
            return redirect(route('buyer-home'));
        }else{
             return view('frontend.technology-buyer',compact('profile'));
        }*/
        //$user = Socialite::driver('linkedin')->user();

        print_r($profile);exit();
        // $user->token;
    }
}
