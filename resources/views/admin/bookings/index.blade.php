@extends('admin.layout.main')
@section('container')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Bookings list</li>
            </ol>

            <div class="box_general">
                <div class="header_box">
                    <h2 class="d-inline-block">Bookings list</h2>
                    <div class="list_general">
                        <ul>
                            @foreach ($order as $item)
                                <li>
                                    <figure><img src="{{ url('') }}/storage/{{ $item->room->image }}" alt="">
                                    </figure>
                                    @php
                                        $status = '';
                                        $bg = '';
                                        
                                        if ($item->payment->status == 0) {
                                            $status = 'Pending';
                                            $bg = 'pending';
                                        } elseif ($item->payment->status == 1) {
                                            $status = 'Approved';
                                            $bg = 'approved';
                                        } elseif ($item->payment->status == 2) {
                                            $status = 'Cancelled';
                                            $bg = 'cancel';
                                        }
                                    @endphp
                                    <h4>{{ $item->room->name }} <i class="{{ $bg }}">{{ $status }}</i></h4>
                                    <ul class="booking_list">
                                        <li><strong>Start date</strong>
                                            {{ date_create($item->datetime_in)->format('d F Y H:i') }}</li>
                                        <li><strong>End date</strong>
                                            {{ date_create($item->datetime_out)->format('d F Y H:i') }}</li>
                                        <li><strong>Booking details</strong> {{ $item->guest }} People</li>
                                        <li><strong>Client</strong> {{ $item->user->name }}</li>
                                    </ul>
                                    {{-- <p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-envelope"></i> Send
                                            Message</a></p> --}}
                                    @if ($item->payment->status == 0)
                                        <ul class="buttons">
                                            <li><a href="/admin/bookings/approve/{{ $item->payment->id }}" class="btn_1 gray approve"><i
                                                        class="fa fa-fw fa-check-circle-o"></i>
                                                    Approve</a>
                                            </li>
                                            <li><a href="/admin/bookings/cancel/{{ $item->payment->id }}" class="btn_1 gray delete"><i
                                                        class="fa fa-fw fa-times-circle-o"></i>
                                                    Cancel</a>
                                            </li>
                                        </ul>
                                    @endif

                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
