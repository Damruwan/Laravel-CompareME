<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Storage;

use Image;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Category::get();
        $items = Item::paginate(10);
        return view("admin.index", ['categories' => $categories, 'items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id)
    {
        return view('item.add', ['category' => \App\Category::find($category_id)]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $category_id = null)
    {
        $this->validate($request, [
            'brand' => 'required',
            'model' => 'required',
            'item_image' => 'required',
            'price' => 'required'
        ]);  
        $item = new Item($request->except('_token'));
        $item->category_id = $category_id;
        $item->save();
        if($request->has('item_image')){
            $asset_path = 'items/'.$item->id.'.'.$request->item_image->getClientOriginalExtension();
            $image = Image::make($request->item_image);
            Storage::put('public/' . $asset_path, (string) $image->encode('jpg'));
            $item->image_link = Storage::url($asset_path);
            $item->save();
        }
        if(!is_null($item)){
            flash("Item save successful")->success();
            return redirect('/admin/items');
        }else{
            flash("Error occured")->error();
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id=null, $item_id=null)
    {

        return view('item.edit', ['category' => \App\Category::find($category_id), 'item' => Item::find($item_id)]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $item_id)
    {
        $this->validate($request, [
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required'
        ]);  
        $item = Item::find($item_id);
        $data = $request->except('_token');
        $item->update($data);
        if($request->has('item_image')){
            $asset_path = 'items/'.$item->id.'.'.$request->item_image->getClientOriginalExtension();
            $image = Image::make($request->item_image);
            Storage::put('public/' . $asset_path, (string) $image->encode('jpg'));
            $item->image_link = Storage::url($asset_path);
            $item->save();
        }
        if(!is_null($item)){
            flash("Item update successful")->success();
            return redirect('/admin/items');
        }else{
            flash("Error occured")->error();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if(!is_null($item)){
            $item->delete();
            flash("Item delete successful")->success();
            return redirect('/admin/items');
        }else{
            flash("Error occured")->error();
        }
    }
}
