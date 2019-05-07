<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPackageRequest;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Package;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PackagesController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('package_access'), 403);

        $packages = Package::all();

        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        abort_unless(\Gate::allows('package_create'), 403);

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.packages.create', compact('users'));
    }

    public function store(StorePackageRequest $request)
    {
        abort_unless(\Gate::allows('package_create'), 403);

        $package = Package::create($request->all());

        return redirect()->route('admin.packages.index');
    }

    public function edit(Package $package)
    {
        abort_unless(\Gate::allows('package_edit'), 403);

        $users = User::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $package->load('user');

        return view('admin.packages.edit', compact('users', 'package'));
    }

    public function update(UpdatePackageRequest $request, Package $package)
    {
        abort_unless(\Gate::allows('package_edit'), 403);

        $package->update($request->all());

        return redirect()->route('admin.packages.index');
    }

    public function show(Package $package)
    {
        abort_unless(\Gate::allows('package_show'), 403);

        $package->load('user');

        return view('admin.packages.show', compact('package'));
    }

    public function destroy(Package $package)
    {
        abort_unless(\Gate::allows('package_delete'), 403);

        $package->delete();

        return back();
    }

    public function massDestroy(MassDestroyPackageRequest $request)
    {
        Package::whereIn('id', request('ids'))->delete();

        return response(null, 204);
    }
}
