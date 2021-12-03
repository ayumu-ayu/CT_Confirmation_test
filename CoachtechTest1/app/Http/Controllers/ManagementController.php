<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ManagementController extends Controller
{
    public function index()
     {
        //管理システム
        $param = [
            'nameKeyword' => '',
            'emailKeyword' => '',
            'upCreated' => '',
            'lowCreated' => '',
        ];
        return view('management', $param);
    }
    
    public function search(Request $request)
    {
        if ($request->input('delete')) {
            Contact::where('id', $request->id)->delete();
        } elseif ($request->input('reset')) {
            return redirect('/management')->withInput();
        }
        $items =
            Contact::where('fullname', 'like', "%{$request->keyword_name}%")
            ->where('gendar', 'like', "%{$request->input_gendar}%")
            ->where('email', 'like', "%{$request->keyword_email}%")
            ->whereDate('created_at', 'like', "%{$request->created_up}%")
            ->whereDate('created_at', 'like', "%{$request->created_low}%")
            ->paginate(10);
        $param = [
            'items' => $items,
            'nameKeyword' => $request->keyword_name,
            'emailKeyword' => $request->keyword_email,
            'upCreated' => $request->created_up,
            'lowCreated' => $request->created_low,
        ];
        return view('management', $param);
    }
}
