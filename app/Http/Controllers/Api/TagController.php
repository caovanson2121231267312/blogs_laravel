<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function searchTags(Request $request)
    {
        $search = $request->get('search');

        $tags = Tag::where('name', 'like', "%{$search}%")->orderBy('updated_at', 'desc')->get();

        return response()->json($tags);
    }
}
