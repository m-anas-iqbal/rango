<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SendMail;
use App\Models\Admin\Subscribe;
use App\Models\User;
use App\Notifications\NewsletterNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function index()
    {
        $data['title'] = __('Subscribers List');
        $data['subscribers'] = Subscribe::latest()->get();
        return view('admin.pages.subscriber.index', $data);
    }

    public function subscribeStore(Request $request)
    {
        $this->validate($request, [
            'subscribe' => 'required|email|unique:subscribes,Subscribe',
        ]);
        if ($request->ajax()) {
            $store = Subscribe::create([
                'Subscribe' => $request->subscribe
            ]);
            $adminUsers = User::where('is_admin', 1)->get();
            foreach ($adminUsers as $admin) {
                $admin->notify(new NewsletterNotification( $request->subscribe));
            }
            if ($store) {
                return response()->json($store);
            }
            return response()->json($store);
        }
    }

    public function promote(Request $request)
    {
        if (is_null($request->message)) {
            return redirect()->back()->with('error', __('Message does not empty!'));
        }
        $dt['message'] = $request->message;
        Mail::to($request->email)->send(new SendMail($dt));
        return redirect()->back()->with('success', __('Message Sent Successfully!'));
    }
}
