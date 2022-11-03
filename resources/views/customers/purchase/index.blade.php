@extends('customers.layout.main')
@section('container')
    <main>
        <div class="hero_in cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix d-flex justify-content-center">
                        <div class="bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum">Payment</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot"></span>
                        </div>

                        <div class="bs-wizard-step disabled">
                            <div class="text-center bs-wizard-stepnum">Finish!</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot"></span>
                        </div>
                    </div>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <form action="/purchase/finish" method="POST">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $room_id }}">
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <input type="hidden" name="date_in" value="{{ $date_in->format('Y-m-d H:i:s') }}">
                    <input type="hidden" name="date_out" value="{{ $date_out->format('Y-m-d H:i:s') }}">
                    <input type="hidden" name="total" value="{{ $total }}">
                    <input type="hidden" name="guest" value="{{ $qty }}">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="box_cart">
                                <div class="form_title">
                                    <h3><strong>1</strong>Your Details</h3>
                                </div>
                                <div class="step">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>First name</label>
                                                <input type="text" class="form-control" id="firstname_booking"
                                                    name="firstname_booking" value="{{ $user->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" id="lastname_booking"
                                                    name="lastname_booking" value="{{ $user->last_name }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" id="email_booking" name="email_booking"
                                                    class="form-control" value="{{ $user->email }}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Telephone</label>
                                                <input type="text" id="telephone_booking" name="telephone_booking"
                                                    class="form-control" value="{{ $user->phone }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <!--End step -->

                                <div class="form_title">
                                    <h3><strong>2</strong>Payment Information</h3>
                                </div>
                                <div class="step">
                                    <div class="form-group">
                                        <label>Payment Type</label>
                                        <select name="paytype" class="form-control" id="paytype">
                                            @foreach ($paytype as $pt)
                                                <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!--End row -->
                                </div>
                                <hr>
                                <!--End step -->
                            </div>
                        </div>
                        <!-- /col -->

                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail">
                                <div id="total_cart">
                                    Total <span class="float-right">{{ $total_rp }}</span>
                                </div>
                                <ul class="cart_details">
                                    <li>From <span>{{ $date_in->format('d-m-Y H:i') }}</span></li>
                                    <li>To <span>{{ $date_out->format('d-m-Y H:i') }}</span></li>
                                    <li>Guests <span>{{ $qty }}</span></li>
                                </ul>
                                <button type="submit" class="btn_1 full-width purchase">Purchase</button>
                                {{-- <div class="text-center"><small>No money charged in this step</small></div> --}}

                            </div>
                        </aside>
                    </div>
                    <!-- /row -->
                </form>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
@endsection
