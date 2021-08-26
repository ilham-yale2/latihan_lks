<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\http\resources\ItemCollection;
use App\http\resources\ItemResource;

class ItemController extends Controller
{
    public function index(Request $request){
        $data = Item::all();
        return (new ItemCollection($data))->response()->setStatusCode(201);
    }

    public function store(Request $request){
        $data = new Item();
        $data->name = $request->name;
        $data->description= $request->description;
        $data->price= $request->price;
        $data->stock= $request->stock;
        $data->image= $request->image;
        $data->save();

        return response()->json([
            'status'=>'success',
            'message'=>'Data berhasil disimpan'
        ]);
    }

    public function update($id, Request $request){
        $data = Item::find($id);
        $data->name = $request->name;
        $data->description= $request->description;
        $data->price= $request->price;
        $data->stock= $request->stock;
        $data->image= $request->image;
        $data->save();

        return response()->json([
            'status'=>'success',
            'message'=>'Data berhasil ubah'
        ]);
    }

    public function show($id){
        $data = Item::find($id);

        return new ItemResource($data);
    }

    public function delete($id){
        Item::destroy($id);

        return response()->json([
            'status'=>'success',
            'message'=>'Data berhasil dihapus'
        ]);
    }
}
