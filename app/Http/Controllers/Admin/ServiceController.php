<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $service;
    public function addService()
    {
        return view('admin.service.add',[
            'serviceCategories' => ServiceCategory::all(),
        ]);
    }

    public function newService(Request $request)
    {
        Service::createService($request);
        return redirect()->back()->with('message', 'Service Created Successfully!');
    }

    public function manageService()
    {
        return view('admin.service.manage',[
            'services' => Service::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function editService($id)
    {
        return view('admin.service.edit',[
            'service' => Service::find($id),
            'serviceCategories' => ServiceCategory::all(),
        ]);
    }

    public function deleteService($id)
    {
        $this->service = Service::find($id);
        if(file_exists($this->service->image))
        {
            unlink($this->service->image);
        }
        $this->service->delete();
        return back()->with('message', 'Service Deleted Successfully!');
    }

    public function updateService(Request $request, $id)
    {
        Service::updateService($request, $id);
        return redirect(route('manage-service'))->with('message', 'Service updated successfully!');
    }
}
