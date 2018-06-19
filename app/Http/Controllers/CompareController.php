<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Item;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($item_id=null)
    {
        $item = Item::find($item_id);

        return view('compare.index', ['item' => $item, 'compare_item' => null]);
    }

    public function searchItem(Request $request)
    {
        $items = Item::where('model', 'like', '%'.$request->get('model').'%')
                    ->orWhere('brand', 'like', '%'.$request->get('model').'%')->get();
        return ['items' => $items];
    }

    public function getCompareItem(Request $request)
    {
        $current_item = Item::find($request->cur_item);
        $compare_item = Item::find($request->item_id);
        return view('compare.index', ['item' => $current_item, 'compare_item' => $compare_item]);
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
