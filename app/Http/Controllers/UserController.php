<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getCurrentUser()
    {
        return Auth::user();
    }

    public function getUser(Request $request, $userId)
    {
        $user = User::find($userId);
        return $user;
        //return profile view
    }

    public function getUsers()
    {
        $users = User::whereNot("type", "admin")->get();
        return $users;
        //return commissions view??
    }

    public function register(Request $request)
    {
        $data = $request->all();
        $user = User::create($data);
        return view("Authentacation");
    }

    public function update(Request $request)
    {
        $authenticatedUser = $request->user();
        $data = $request->all();
        if(isset($data["avatar"])){
            $data["avatar"] = "avatars/" . Storage::disk("avatars")
                ->putFileAs(
                    $authenticatedUser->id, 
                    $request->file("avatar"), 
                    $data["name"] . "." . $request->file("avatar")->getClientOriginalExtension()
                );
        }

        $authenticatedUser->update($data);
        return response();
    }

    public function delete(Request $request, $userId)
    {
        $user = User::find($userId);
        $user->artworks()->delete();
        $user->userReports()->delete();
        $user->drawingLessons()->delete();
        $user->ownedLessons()->delete();
        $user->delete();
        return response();
    }
}
