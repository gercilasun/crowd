<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/users', function()
    {
        $user = User::all(); // select * from users
        //$users = User::find(1);

        return $user->username;
    }
*/

Route::get('/', function()

    {
        //$users = DB::table('users')->get(); //returns
       // $usersnot = DB::table('users')->where('username', '!=', 'tom')->get();
        //$usersnot = User::where('username', '!=', 'tom')->get();
        //$users = User::all();

       /* $user = new User;
        $user->username = 'newuser';
        $user->password = Hash::make('password');
        $user->save();
       */
        User::create([
            'username' => 'AnotherUser',
            'password' => Hash::make('1234')

        ]); //mass assignment exception

        $user = User::find(2);
        $user->username = 'Updatedname';
        $user->save();

        //$user = DB::table('users')->find(1); //returns those with id 1


        //return $usersnot;

        //dd($user); // die(var_dump($user));
        //return $user->username;
        //return $users;
        return User::all();

    }
);