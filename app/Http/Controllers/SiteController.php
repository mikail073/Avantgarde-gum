<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\Trainer;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home() {
        return view('home');
    }

    public function gyms() {
        $gyms = Gym::all();
        return view('gyms', compact('gyms'));
    }

    public function trainers() {
        $trainers = Trainer::all();
        return view('trainers', compact('trainers'));
    }

    public function prices() {
        $gyms = Gym::with('prices')->get();
        return view('prices', compact('gyms'));
    }

    public function contacts() {
        $gyms = Gym::all();
        return view('contacts', compact('gyms'));
    }
}
