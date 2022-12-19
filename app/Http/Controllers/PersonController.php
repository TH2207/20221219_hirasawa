<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function create(PersonRequest $request)
    {
        $form = $request->all();
        Person::create($form);
        return view('thanks');
    }
}
