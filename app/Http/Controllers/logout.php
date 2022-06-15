<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logout extends Controller
{
    
    public function destroy()
    {
        session_destroy();


        return redirect('/')->with('success', 'Goodbye!');
    }
}

