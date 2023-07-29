<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        $users = User::all();

        $res = [
            'data'    => $users,
            'message' => 'Kullanıcılar'
        ];

        return response()->json($res);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Illuminate\View\View
    {
        return view('backend.pages.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $req): \Illuminate\Http\RedirectResponse
    {
        User::create($req->all());

        return redirect()->route('users.index')->with('message', $this->notificationResponse(text: 'Kullanıcı başarıyla oluşturuldu.'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): \Illuminate\View\View
    {
        return view('backend.pages.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $req, User $user): \Illuminate\Http\RedirectResponse
    {
        $user->update($req->all());

        return redirect()->route('users.index')->with('message', $this->notificationResponse(text: 'Kullanıcı başarıyla güncellendi.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): \Illuminate\Http\Response
    {
        if (!(User::count() > 1)) {
            return response('Sistemde 1 kullanıcı olmak zorundadır.', 500);
        }

        $user->delete();

        return response('Kullanıcı başarıyla silindi.');
    }

    /**
     * Show the form for change user's password
     */
    public function passwordForm(User $user): \Illuminate\View\View
    {
        return view('backend.pages.users.password-form', ['user' => $user]);
    }

    /**
     * Show the form for change user's password
     */
    public function updatePassword(User $user, UserRequest $req): \Illuminate\Http\RedirectResponse
    {
        $user->update($req->all());

        return redirect()->route('users.index')->with('message', $this->notificationResponse(text: 'Şifre başarıyla güncellendi.'));
    }
}
