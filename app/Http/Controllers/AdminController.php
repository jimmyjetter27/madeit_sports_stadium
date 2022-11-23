<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    public function login_page()
    {
        return view('admin.login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)->first();
//        dd($admin);

        if (! $admin || ! Hash::check($request->password, $admin->password)) {
            return redirect()->back()->with('error_message', 'The provided credentials are incorrect.');
        }
        Auth::login($admin);
        return view('admin.dashboard', [
            'total_user_count' => User::query()->get()->count(),
            'new_user_count' => User::query()->latest()->limit(3)->get()->count(),
        ]);
    }


    public function profile()
    {
        return view('admin.profile');
    }


    public function logout()
    {
        Auth::logout();
        return view('admin.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::query()->latest()->paginate();
        return new UserCollection($admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAdminRequest $request)
    {
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $confirm_pass = $request->confirm_password;
        $user_type = $request->type;
        if ($confirm_pass != $password)
        {
            return redirect()->back()->with('error_message', 'Passwords do not match');
        } else {
            $user = Str::after($user_type, 'App/Models/');
//            dd($request->all());
          $new_user = User::query()->create($request->all());
          if ($new_user)
          {
              return redirect()->route('admin-users')->with('success_message', $name.' has been successfully added');
          } else {
              return redirect()->back()->with('error_message', 'An error occurred. Please try again');
          }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function destroy_user($id)
    {
        User::query()->find($id)->delete();
        return redirect()->back()->with('success_message', 'User successfully deleted');
    }

}
