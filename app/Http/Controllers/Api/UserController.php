<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function searchTags(Request $request)
    {
        $search = $request->get('search');

        $tags = User::where('name', 'like', "%{$search}%")->get();

        return response()->json($tags);
    }
}
