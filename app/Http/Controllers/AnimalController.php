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
        $animals = Animal::withCount('likedByUsers')->get();
        $likedAnimalIds = Auth::check() ? Auth::user()->likedAnimals()->pluck('animal_id')->toArray() : [];
        return view('animals.index', compact('animals', 'likedAnimalIds'));
    }

    public function like($id)
    {
        $animal = Animal::findOrFail($id);

        if (Auth::check()) {
            $like = Like::where('user_id', Auth::id())
            ->where('animal_id', $animal->id)
            ->first();

                if ($like) {
                    $like->delete();
                } else {
                Like::create([
                    'user_id' => Auth::id(),
                    'animal_id' => $animal->id,
                ]);
            }
        }

        return redirect()->back();
    }

}
