@extends('customers.layout.main')
@section('container')
    <main>
        <div class="hero_in cart_section">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix">
                        <h1 class="fadeInUp"><span></span>History</h1>
                    </div>
                    <!-- End bs-wizard -->
                </div>
            </div>
        </div>
        <!--/hero_in-->

        <div class="bg_color_1">
            <div class="container margin_60_35">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box_cart">
                            <table class="table table-striped cart-list">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="thumb_cart">
                                                        <img src="{{ url('') }}/storage/{{ $item->room->image }}"
                                                            alt="Image">
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="item_cart my-0">{{ $item->room->name }}</span>
                                                            @php
                                                                $text = '';
                                                                $bg = '';

                                                                if ($item->payment->status == 0){
                                                                    $text = 'Pending';
                                                                    $bg = 'bg-warning';                                                                
                                                                }else if ($item->payment->status == 1){
                                                                    $text = 'Approved';
                                                                    $bg = 'bg-success';  
                                                                }else if ($item->payment->status == 2){
                                                                    $text = 'Cancelled';
                                                                    $bg = 'bg-danger';  
                                                                }
                                                            @endphp
                                                            <div class="badge {{ $bg }}">{{ $text }}</div> <br>
                                                            <span class="item_cart my-0 small"
                                                                style="color: rgb(177, 177, 177)">{{ date_create($item->created_at)->format('d-m-Y H:i') }}</span>
                                                            <br>
                                                            <span class="item_cart my-0" style="color: rgb(87, 87, 87)">Start Date : {{ date_create($item->datetime_in)->format('d-m-Y H:i') }}</span> <br>
                                                            <span class="item_cart my-0" style="color: rgb(87, 87, 87)">End Date : {{ date_create($item->datetime_out)->format('d-m-Y H:i') }}</span> <br>
                                                            <span class="item_cart my-0" style="color: rgb(87, 87, 87)">Guests : {{ $item->guest }}</span> <br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <strong>{{ $item->payment->total_rp() }}</strong>
                                            </td>

                                            <td class="options" style="width:5%; text-align:center;">
                                                @if ($item->payment->status == 1)
                                                    <a href="/history/invoice/{{ $item->id }}" title="Print Invoice"><i
                                                            class="text-success icon-print"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /cart-options -->
                        </div>
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_color_1 -->
    </main>
@endsection
