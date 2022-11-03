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
                    <a href="/admin/rooms">Rooms</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="/admin/rooms/update" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="room_id" value="{{ $room->id }}">
                <div class="box_general padding_bottom">
                    <div class="header_box version_2">
                        <h2><i class="fa fa-file"></i>Basic info</h2>
                    </div>
                    <div class="row mb-5">
                        <div class="col-md-12 d-flex justify-content-center">
                            <img src="/storage/{{ $room->image }}" class="img-thumbnail w-50" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Room Title</label>
                                <input type="text" class="form-control" name="name" placeholder="Hotel Mariott" value="{{ $room->name }}"
                                    autofocus required>
                            </div>

                            <div class="form-group">
                                <label>Ammount</label>
                                <input type="text" class="form-control" name="ammount" value="{{ $room->ammount }}" required>
                            </div>

                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" name="price" value="{{ $room->price }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10" required>{{ $room->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Facility</label>
                                <div class="styled-select">
                                    <select name="service">
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}" {{ ($service->id == $room->service_id) ? 'selected' : '' }}>{{ $service->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <div class="styled-select">
                                    <select name="roomtype">
                                        @foreach ($roomtype as $type)
                                            <option value="{{ $type->id }}" {{ ($type->id == $room->type_id) ? 'selected' : '' }}>{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Facilities</label>
                                <input type="text" class="form-control" name="facilities" id="" placeholder="ex. Wifi,LCD,TV" value="{{ $room->facilities }}" required>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
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

