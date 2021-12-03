<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;

class FormController extends Controller
{
    public function index()
    {
        //問い合わせフォーム
        return view('form_content');
    }

    public function post(ClientRequest $request)
    {
        //問い合わせフォーム
        $familyname = $request->name__family;
        $lastyname = $request->name__last;
        $gendar = $request->gendar;
        $email = $request->email;
        $postcode = $request->postcode;
        $address = $request->address;
        $buildingname = $request->building_name;
        $opinion = $request->opinion;

        $item = [
            'familyname' => $familyname,
            'lastname' => $lastyname,
            'gendar' => $gendar,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'buildingname' => $buildingname,
            'opinion' => $opinion
        ];

        return view('confirmation', $item);
    }

    public function submit(Request $request)
    {
        //確認画面
        if ($request->post('back')) {
            return redirect('/form')->withInput();
        }
        $param = [
            'fullname' => $request->fullname,
            'gendar' => $request->gendar,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building_name' => $request->building_name,
            'opinion' => $request->opinion
        ];
        DB::table('contacts')->insert($param);
        return view('thanks');
    }
}