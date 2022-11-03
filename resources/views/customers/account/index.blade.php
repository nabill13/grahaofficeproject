@extends('customers.layout.main')
@section('container')
    <main>
        <section class="hero_in general">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>Account</h1>
                </div>
            </div>
        </section>
        <div class="content-wrapper">
            <div class="container-fluid">                
                <form action="/account/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2 mb-5">
                            <h2><i class="fa fa-user"></i> User details</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="">
                                    <div class="col-md-12 d-flex justify-content-center">
                                        @if ($user->image != null)
                                            <img class="img-responsive w-50" style="object-fit : cover; height : 178px;"
                                                src="{{ url('') }}/storage/{{ $user->image }}" alt="">
                                        @else
                                            <img class="img-responsive"
                                                src="{{ url('') }}/admin_assets/img/avatar.jpg" alt="">
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name"
                                                autofocus autocomplete="off" value="{{ $user->name }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Last Name" autocomplete="off" value="{{ $user->last_name }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control" autocomplete="off"
                                                value="{{ $user->username }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" autocomplete="off"
                                                value="{{ $user->email }}" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" class="form-control"
                                                value="{{ $user->phone }}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-5">
                        <a href="/account/edit" class="btn_1 medium">Edit</a>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid-->
        </div>
    </main>
@endsection
