@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.package.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.package.fields.name') }}
                    </th>
                    <td>
                        {{ $package->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.package.fields.user') }}
                    </th>
                    <td>
                        {{ $package->user->name ?? '' }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection