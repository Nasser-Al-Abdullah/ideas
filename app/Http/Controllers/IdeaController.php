<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function store() {
        request()->validate([
           'idea'  => 'required|min:5|max:240'
        ]);

        Idea::create(
            [
                'content' => request()->get('idea', ''),
            ]
        );

        // with is a one time session, so after reloading the flag will be gone (AKA flash messages)
        return redirect()->route('dashboard')->with('success', 'Idea created successfully !');
    }

    public function destroy($id) {
        $idea = Idea::where('id', $id)->first();

        $idea->delete();

        return redirect()->route('dashboard')->with('success', 'Idea deleted successfully !');
    }
}
