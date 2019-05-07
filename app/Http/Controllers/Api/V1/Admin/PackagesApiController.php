<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Package;

class PackagesApiController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return $packages;
    }

    public function store(StorePackageRequest $request)
    {
        return Package::create($request->all());
    }

    public function update(UpdatePackageRequest $request, Package $package)
    {
        return $package->update($request->all());
    }

    public function show(Package $package)
    {
        return $package;
    }

    public function destroy(Package $package)
    {
        return $package->delete();
    }
}
