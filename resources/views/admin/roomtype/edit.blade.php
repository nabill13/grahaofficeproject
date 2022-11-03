@extends('admin.layout.main')
@section('container')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/admin">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="/admin/roomtype">Room Type</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="/admin/roomtype/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $roomtype->id }}">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-plus-circle"></i>Room Type Details</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12 add_top_10">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            autofocus autocomplete="off" value="{{ $roomtype->name }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn_1 medium">Save</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid-->
    </div>
@endsection
