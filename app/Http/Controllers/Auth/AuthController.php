<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Socialite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * 사용자를 깃허브 인증 페이지로 전환
     *
     * @return Response
     */
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * 깃허브에서 인증이 완료된 사용자 정보를 받아서 처리
     *
     * @return Response
     */
    public function handleGitHubCallback()
    {
        try {
            $user = Socialite::driver('github')->user();
        } catch (Exception $e) {
            return redirect('auth/github');
        }

        $user = $this->findOrCreateUser($user);

        \Auth::login($user);

        return redirect()->intended($this->redirectPath());
    }

    /**
     * 깃허브 인증에 성공한 후 받은 사용자 정보가 데이터베이스에 없을 경우 생성하고 이미 있는 경우 가져온다
     *
     * @param $githubUser 깃허브에서 전달받은 사용자 정보
     *
     * @return User
     */
    public function findOrCreateUser($githubUser)
    {
        if ($user = User::where('github_id', $githubUser->id)->first()) {
            return $user;
        }

        return User::create([
            'name'      => $githubUser->name,
            'email'     => $githubUser->email,
            'github_id' => $githubUser->id,
        ]);
    }

    /**
     * 사용자를 카카오 인증 페이지로 전환
     *
     * @return Response
     */
    public function redirectToKakao()
    {
        return Socialite::driver('kakao')->redirect();
    }

    /**
     * 깃허브에서 인증이 완료된 사용자 정보를 받아서 처리
     *
     * @return Response
     */
    public function handleKakaoCallback()
    {
        try {
            $user = Socialite::driver('kakao')->user();
        } catch (Exception $e) {
            return redirect('auth/kakao');
        }

        $user = $this->findOrCreateUserKakao($user);

        \Auth::login($user);

        return redirect()->intended($this->redirectPath());
    }

    /**
     * 카카오 인증에 성공한 후 받은 사용자 정보가 데이터베이스에 없을 경우 생성하고 이미 있는 경우 가져온다
     *
     * @param $kakaoUser 카카오에서 전달받은 사용자 정보
     *
     * @return User
     */
    public function findOrCreateUserKakao($kakaoUser)
    {
        if ($user = User::where('kakao_id', $kakaoUser->id)->first()) {
            return $user;
        }

        if (empty($kakaoUser->email)) {
            $kakaoUser->email = $kakaoUser->id . '@hnsc.com';
        }

        //name, email은 null값으로 가져온다
        return User::create([
            'name'      => $kakaoUser->nickname,
            'email'     => $kakaoUser->email,
            'kakao_id'  => $kakaoUser->id,
        ]);
    }

}
