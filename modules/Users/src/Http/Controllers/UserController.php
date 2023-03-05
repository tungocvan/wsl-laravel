<?php

namespace Modules\Users\src\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use Modules\Users\src\Models\User;
use App\Http\Controllers\Controller;
use Modules\Users\src\Repositories\UsersRepository;
// use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepo;
    public function __contruct(UsersRepository $userRepo)
     {
    //     # code...
         $this->userRepo = $userRepo;
    }

    public function index(){
        //$users = $this->userRepo->getUsers();
        //dd($users);
        // $user = new User();
        //  $user->name ='Ngoc Van';
        //  $user->email = 'tungocvan@gmail.com';
        //  $user->save();
         //$results = DB::table('users')->get();

         $users = User::all();
         dd($users);
        $pageHeader = 'pageHeader';
        $pageFooter ='';
        return view('Users::list',compact('pageHeader','pageFooter'));
    }
  
}
