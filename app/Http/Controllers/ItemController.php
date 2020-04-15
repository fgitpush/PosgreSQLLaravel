<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function index()
    {
        return Item::all();
    }
 
    public function show($id)
    {
        return Item::find($id);
    }

    public function store(Request $request)
    {
        return Item::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Item::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = List::findOrFail($id);
        $article->delete();

        return 204;
    }
}
