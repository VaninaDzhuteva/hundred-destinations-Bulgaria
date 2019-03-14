<?php

namespace App\Http\Controllers;

use App\Destination;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    public function index() {
        $destinations = Destination::all();
        return view('layouts.destinations.index', compact('destinations'));
    }

    public function store(Request $request) {

        $destination = new Destination();

        $destination->fill($this->validateData($request));

        if($image = $request->hasFile('image')) {

            $image = $request->file('image') ;

            $imageName = $image->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $image->move($destinationPath,$imageName);
            $destination->image = $imageName;
        }

        $destination->save();

        return redirect('/destinations')->with('success', 'Item added');
    }

    public function show($id) {
        $destination = Destination::find($id);
        return view('layouts.destinations.show', compact('destination'));
    }

    public function validateData(Request $request) {
        return $this->validate($request, [
            'number' => 'required',
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'location' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'email' => 'nullable',
            'working_days' => 'nullable',
            'working_hours' => 'nullable',
            'taxes' => 'nullable',
            'lectures' => 'nullable',
            'freeDay' => 'nullable',
            'visited' => 'nullable'
        ]);
    }
}
