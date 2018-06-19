<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Item;

use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Item::with('category');
        if($request->has('category') && ($request->get('category') != 0)){
            $query->where('category_id', $request->get('category'));
        }

        if($request->has('model') && !is_null($request->get('model'))){
            $query->where('model', 'like', '%'.$request->get('model').'%');
        }

        if($request->has('price_start') && $request->has('price_end') && !is_null($request->get('price_start')) && !is_null($request->get('price_end'))){
            $query->whereBetween('price', [$request->get('price_start'), $request->get('price_end')]);
        }

        $categories = \App\Category::get();
        $items = $query->paginate(10);

        return view('home', ['items' => $items, 'categories' => $categories]);
    }

    public function viewItem($item_id=null)
    {
        $item = Item::with('category','comments.user', 'advertisements.user')->find($item_id);
        return view('user.item', ['item' => $item]);
    }

    public function saveComment(Request $request, $item_id)
    {
        $this->validate($request, [
            'comment' => 'required'
        ]);
        $item = Item::find($item_id);
        \App\Comment::create([
            'user_id' => \Auth::user()->id,
            'item_id' => $item->id,
            'comment' => $request->comment,
        ]); 

        return redirect('/item/'.$item_id);
    }

    public function saveAdvertisement(Request $request, $item_id)
    {
        $this->validate($request, [
            'image' => 'required',
            'description' => 'required',
            'price' => 'required',
            'location' => 'required',
            'tel_no' => 'required'
        ]);

        $item = Item::find($item_id);
        $advertisement = \App\Advertisement::create([
            'user_id' => \Auth::user()->id,
            'item_id' => $item->id,
            'description' => $request->description,
            'price' => $request->price,
            'location' => $request->location,
            'tel_no' => $request->tel_no,
            'condition' => $request->condition
        ]); 
        if($request->has('image')){
            $asset_path = 'advertisements/'.\Auth::user()->id.'/'.$advertisement->id.'.'.$request->image->getClientOriginalExtension();
            $image = Image::make($request->image);
            Storage::put('public/' . $asset_path, (string) $image->encode('jpg'));
            $advertisement->image = Storage::url($asset_path);
            $advertisement->save();
        }        
        return redirect('/item/'.$item_id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
