@extends('admin.layout.main')
@section('container')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Users</li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center text-primary font-weight-bold">User Data</div>
                        <div>
                            <a href="/admin/users/add" class="btn btn-success"><i class="bi bi-plus"></i> New</a>
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
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username . ' ' . $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-center">{{ $user->rule->level }}</td>
                                        <td class="text-center">
                                            <a href="/admin/users/edit/{{ $user->id }}" class="btn btn-sm btn-warning" title="Edit"><i class="bi bi-pencil-square"></i></a>
                                             @if (!isset($user->order->id) && $user->id != auth()->user()->id)
                                                <a href="/admin/users/remove/{{ $user->id }}" onclick="return confirm('Are you sure you want to delete this data?')" class="btn btn-sm btn-danger" title="Remove"><i
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
