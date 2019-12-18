<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dog;
use Intervention\Image\Facades\Image;

class DogsController extends Controller

{
    public function index()
    {
        $dogs = \App\Dog::paginate(10);

    
        return view('honden.index', compact('dogs'));

    }

    public function create() 
    {
        $dog = new Dog();

        return view('honden.create', compact('dog'));
    }

    public function store()
    {
        
       $dog = \App\Dog::create($this->validateRequest());

       $this->storeImage($dog);

    return redirect('/home');

    }

    public function show(\App\Dog $dog)
    {
        return view('honden.show', compact('dog'));
    }

    public function edit(\App\Dog $dog)
    {
        return view('honden.edit', compact('dog'));
    }

    public function update(\App\Dog $dog)
    {
    
        $dog->update($this->validateRequest());

        $this->storeImage($dog);

    return redirect('/honden/' . $dog->id);
    }

    public function destroy (\App\Dog $dog)
    {
        $dog->delete();

        return redirect('/home');
    }

    private function validateRequest()
    {

        return tap(request()->validate([
            'name' => 'required',
            'age' => 'required',
            'breed' => 'required',
            'gender' => 'required',
            'pair' => 'required',
            'other_dogs' => 'required',
            'other_cats' => 'required',
            'with_kids' => 'required',
            'castrated' => 'required',
            'home_alone' => 'required',
            'car_rides' => 'required',
            'commands' => 'required',
            'housebroken' => 'required',
            'independent' => 'required',
            'on_line' => 'required',
            'fur_care' => 'required',
            'description' => 'nullable',

        ]), function () {

            if (request()->hasFile('image')){
                request()->validate([
                    'image' => 'file|image|max:5000',
                ]);

        }

    });
            

    }

    private function storeImage($dog)
    {
        if (request()->has('image')){
            $dog->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

           

            $image = Image::make(public_path('storage/' . $dog->image))->fit(500, 500);
            $image->save();

   
        } 

    }
}