<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('name')->get();

        return view('admin.services.index', [
            'title' => 'Services',
            'nvb' => 'services',
            'services' => $services
        ]);
    }

    public function create()
    {
        return view('admin.services.create', [
            'title' => 'Services',
            'nvb' => 'services'
        ]);
    }

    public function store(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->save();

        return redirect('/admin/services');
    }

    public function edit($id)
    {
        $service = Service::find($id);

        return view('admin.services.edit', [
            'title' => 'Services',
            'nvb' => 'services',
            'service' => $service
        ]);
    }

    public function update(Request $request)
    {
        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->save();

        return redirect('/admin/services');
    }

    public function remove($id)
    {
        $service = Service::find($id);
        $service->delete();

        return redirect('/admin/services');
    }
}
