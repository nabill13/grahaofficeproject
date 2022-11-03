@extends('customers.layout.main')
@section('container')
    <main>
        <div class="hero_in cart_section last">
            <div class="wrapper">
                <div class="container">
                    <div class="bs-wizard clearfix d-flex justify-content-center">                        
                        <div class="bs-wizard-step">
                            <div class="text-center bs-wizard-stepnum">Payment</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot"></span>
                        </div>

                        <div class="bs-wizard-step active">
                            <div class="text-center bs-wizard-stepnum">Finish!</div>
                            <div class="progress">
                                <div class="progress-bar"></div>
                            </div>
                            <span class="bs-wizard-dot"></span>
                        </div>
                    </div>
                    <!-- End bs-wizard -->
                    <div id="confirm">
                        <h4>Order completed!</h4>   
                        <p class="mb-4">Thank you for booking meeting rooms. Please wait until we accepts your payment and after that you'll receive the invoice at history and can print it.</p>
                        <a href="/history">Go to History</a>
                    </div>
                </div>
            </div>
        </div>
        <!--/hero_in-->
    </main>
    <!--/main-->
@endsection
