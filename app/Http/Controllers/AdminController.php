<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function viewAdvertisements()
    {
        $advertisements = \App\Advertisement::with('item', 'user')->paginate(10);
        return view('admin.advertisements', ['advertisements' => $advertisements]);
    }

    public function approveAdvertisement($ad_id=null, $status=null){
        $advertisement = \App\Advertisement::find($ad_id);
        if($status == 1){
            $advertisement->status = 1;
        }else{
            $advertisement->status = 0;
        }
        $advertisement->save();
        return redirect('admin/advertisements');
    }
}
