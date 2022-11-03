@extends('admin.layout.main')
@section('container')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Rooms</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center text-primary font-weight-bold">Rooms Data</div>
                        <div>
                            <a href="/admin/rooms/add" class="btn btn-success"><i class="bi bi-plus"></i> New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Ammount</th>
                                    <th>Facility</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $item)
                                    <tr>
                                        <td align="center">{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td align="center">{{ $item->type->name }}</td>
                                        <td align="center">{{ $item->ammount }}</td>
                                        <td align="center">{{ $item->service->name }}</td>
                                        <td align="center">{{ $item->price_rp() }}</td>
                                        <td align="center">
                                            <a href="/admin/rooms/edit/{{ $item->id }}"
                                                class="btn btn-sm btn-warning" title="Edit"><i
                                                    class="bi bi-pencil-square"></i></a>
                                            @if (!isset($item->order->id))
                                                <a href="/admin/rooms/remove/{{ $item->id }}" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-sm btn-danger" title="Remove"><i
                                                        class="bi bi-trash-fill"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
            <!-- /tables-->
        </div>
        <!-- /container-fluid-->
    </div>
@endsection
