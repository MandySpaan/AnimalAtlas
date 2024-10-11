<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('animals.index', compact('animals'));
    }

    public function like($id)
    {
        $animal = Animal::findOrFail($id);

        if (Auth::check()) {
            $likeExists = Like::where('user_id', Auth::id())
                ->where('animal_id', $animal->id)
                ->exists();

            if (!$likeExists) {
                Like::create([
                    'user_id' => Auth::id(),
                    'animal_id' => $animal->id,
                ]);
            }
        }

        return redirect()->back();
    }

}
