@extends('customers.layout.main')
@section('container')
    <main>
        <section class="hero_in tours_detail">
            <div class="wrapper">
                <div class="container">
                    <h1 class="fadeInUp"><span></span>MEETING ROOM</h1>
                </div>
                <span class="magnific-gallery">
                    <a href="{{ url('') }}/storage/{{ $room->image }}" class="btn_photos" title="Photo title"
                        data-effect="mfp-zoom-in">View
                        photos</a>
                    {{-- <a href="img/gallery/tour_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
                    <a href="img/gallery/tour_list_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a> --}}
                </span>
            </div>
        </section>
        <!--/hero_in-->

        <div class="bg_color_1">
            <nav class="secondary_nav sticky_horizontal">
                <div class="container">
                    <ul class="clearfix">
                        <li><a href="#sidebar">Booking</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container ">
                <div class="row">
                    <div class="col-lg-8">
                        <section id="description">
                            <h1 class="mb-4 mt-3">{{ $room->name }}</h1>
                            <h2>Description</h2>
                            <p>{{ $room->description }}</p>
                            <hr>
                            <p>Facility :</p>
                            @php
                                $fclty = explode(',', $room->facilities);
                                $fclty_count = count($fclty);
                            @endphp
                            <div class="row mb-4">
                                @for ($i = 0; $i < $fclty_count; $i++)
                                    <div class="col-lg-6">
                                        <ul class="bullets">
                                            <li>{{ $fclty[$i] }}</li>
                                        </ul>
                                    </div>
                                @endfor
                            </div>
                            <!-- /row -->
                        </section>
                        <!-- /section -->
                    </div>
                    <!-- /col -->

                    <aside class="col-lg-4" id="sidebar">
                        <form action="/purchase" method="POST">
                            @csrf
                            <input type="hidden" name="room_id" value="{{ $room->id }}">
                            <div class="box_detail booking">
                                <div class="price">
                                    <span>{{ $room->price_rp() }} <small>/hours</small></span>
                                </div>
                                <div class="form-group input-dates">
                                    <div class="form-group">
                                        <label for="date_in">Start Booking</label>
                                        <div class="d-flex justify-content-center">
                                            <input class="form-control" type="date" name="date_in" id="date_in"
                                                placeholder="Date" required>
                                            <input class="form-control" type="time" min="09:00" max="21:00"
                                                name="time_in" id="time_in" placeholder="Time" required>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group input-dates">
                                    <div class="form-group">
                                        <label for="date_end">End Booking</label>
                                        <div class="d-flex justify-content-center">
                                            <input class="form-control" type="date" name="date_end" id="date_end"
                                                placeholder="Date" required>
                                            <input class="form-control" type="time" min="09:00" max="21:00"
                                                name="time_end" id="time_end" placeholder="Time" required>
                                        </div>
                                    </div>
                                </div>
                                <label for="">Guests</label>
                                <div class="panel-dropdown">
                                    <a href="#">Guests <span class="qtyTotal">1</span></a>
                                    <div class="panel-dropdown-content right">
                                        <div class="qtyButtons">
                                            <label>Adults</label>
                                            <input type="text" name="qtyInput" value="1">
                                        </div>                                        
                                    </div>
                                </div>
                                @if (isset(auth()->user()->name))
                                    <button type="submit" class="btn_1 full-width purchase">Purchase</button>
                                @else
                                    <a href="#sign-in-dialog" id="sign-in"
                                        class="btn_1 full-width purchase">Purchase</a>
                                @endif
                                <div class="text-center"><small>No money charged in this step</small></div>
                            </div>

                            <ul class="share-buttons">
                                <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                                <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                                <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a>
                                </li>
                            </ul>
                        </form>
                    </aside>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
@endsection

