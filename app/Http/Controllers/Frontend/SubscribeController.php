<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Admin\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribeStore(Request $request)
    {
        $this->validate($request, [
            'subscribe' => 'required|email|unique:subscribes,Subscribe',
        ]);
        // if ($request->ajax()) {
            $store = Subscribe::create([
                'Subscribe' => $request->subscribe
            ]);
            return redirect()->back()->with('success', __('Subscribe Successfully!'));;
            // if ($store) {
            //     return response()->json($store);
            // }
            // return response()->json($store);
        // }
    }
}
