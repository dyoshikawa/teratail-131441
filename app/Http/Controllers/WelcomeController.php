<?php

namespace App\Http\Controllers;

use App\Employee;

class WelcomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $employees = Employee::all();

        return view('welcome', compact('employees'));
    }
}
