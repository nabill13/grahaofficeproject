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
                    <a href="/admin/users">Users</a>
                </li>
                <li class="breadcrumb-item active">Add</li>
            </ol>
            <form action="/admin/users/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-user"></i>User details</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-12 add_top_30">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            autofocus autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                            autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <!-- /row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control" autocomplete="off"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" autocomplete="off"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control" autocomplete="off"
                                            required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="phone" name="phone" class="form-control" autocomplete="off"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Level</label>
                                        <select name="rule" class="form-control" id="rule">
                                            <option value="1">Admin</option>
                                            <option value="3">User</option>
                                        </select>
                                    </div>
                                </div>  

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Photo</label>
                                        <input type="file" name="image" accept="image/*" class="form-control">
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
