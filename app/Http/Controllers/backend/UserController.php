<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('backend.user.index', compact('users'));

    }


    public function edit($id)
    {
        $user = User::find($id) ?? abort(404, 'Kullanıcı Bulunamadı.');

        return view('backend.user.edit', compact('user'));
    }

    public function show($id)
    {
        $user = User::where('id', $id);

        return view('backend.user.edit', compact('user'));
    }

    public function update(User $user)
    {
        if($user->status == 1){
            $user->status = 0;
            $user->save();
        }
        else if($user->status == 0){
            $user->status = 1;
            $user->save();
        }

        return redirect()->route('backend.user.index')->withSuccess('Kullanıcı yetkisi güncellendi');
    }

    public function destroy($id)
    {
        $user = User::find($id) ?? abort(404, 'Kullanıcı Bulunamadı.');
        $user->delete();
        return redirect()->route('backend.user.index')->withSuccess('Kullanıcı Başarıyla Silindi.');
    }
}
