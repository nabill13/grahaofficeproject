<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paytype;
use Illuminate\Http\Request;

class PaytypeController extends Controller
{
    public function index()
    {
        $paytype = Paytype::get();

        return view('admin.paytype.index', [
            'title' => 'Pay Type',
            'nvb' => 'paytype',
            'paytype' => $paytype
        ]);
    }

    public function create()
    {
        return view('admin.paytype.create', [
            'title' => 'Pay Type',
            'nvb' => 'paytype'
        ]);
    }

    public function store(Request $request)
    {
        $paytype = new Paytype;
        $paytype->name = $request->name;
        $paytype->save();

        return redirect('/admin/paytype');
    }

    public function edit($id)
    {
        $paytype = Paytype::find($id);

        return view('admin.paytype.edit', [
            'title' => 'Pay Type',
            'nvb' => 'paytype',
            'paytype' => $paytype
        ]);
    }

    public function update(Request $request)
    {
        $paytype = Paytype::find($request->id);
        $paytype->name = $request->name;
        $paytype->save();

        return redirect('/admin/paytype');
    }

    public function remove($id)     
    {
        $paytype = Paytype::find($id);
        $paytype->delete();

        return redirect('/admin/paytype');
    }
}
