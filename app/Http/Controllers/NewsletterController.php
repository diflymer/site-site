<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;

use Illuminate\Http\Request;

class NewsletterController extends Controller {

    public function add(Request $request) {

        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'unique:newsletters'],
        ]);

        $newsletter = new Newsletter;
  
        $newsletter->email = $request->email;

        $newsletter->save();
        
        return response()->json(['success'=>'Form is successfully submitted!']);
    }

}
