@extends('frontend.layouts.app')
@section('content')
    <!--Start banner Section-->
    <section class="welcome-area request-bg">
        <div class="overlay-banner-request"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="welcome-text ">
                        <h1>Secure P2P Payment and e-Wallet Service</h1>
                        <h2>With ASHPATH you can buy and sell anything safely without the risk of chargebacks. Truly secure payments..</h2>

                        @if(Auth::check() == false)
                            <a href="{{url('register')}}" class="iphone-btn">
                                GET STARTED
                            </a>
                            <p>@lang('message.request-money.banner.already-signed') <a href="{{url('login')}}">@lang('message.request-money.banner.login')</a> 
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End banner Section-->

    <!--Start Section A-->
    <section class="mt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec-title">
                        <h2>@lang('message.request-money.section-a.title')</h2>
                        <p class="mt-3">Ashpath.com is the world’s most secure payment method from a counterparty risk perspective - safeguarding both buyer and seller, all funds transacted using escrow are kept in trust.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="right-bar">
                        <h2><span>1</span>@lang('message.request-money.section-a.sub-section-1.title') </h2>
                        <p>@lang('message.request-money.section-a.sub-section-1.sub-title') </p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-bar">
                        <h2><span>2</span>Create Escrow</h2>
                        <p>Enter your recipient email address, Money will be held until both parties agree, then release money to send securely.</p>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="right-bar">
                        <h2><span>3</span>Release Money</h2>
                        <p>Open pending Escrow transaction and click on release to send money to beneficiary on reciept of value.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Section A-->

    <!--Start Section B-->
    <!-- <section class="mt-60">
        <div class="container">
            <div class="row my-90">
                <div class="col-md-5">
                    <img src="{{ theme_asset('public/images/banner/square_cash_phone.jpg') }}" alt="Phone Image"
                         class="img-responsive img-fluid"/>
                </div>
                <div class="col-md-7">
                    <div class="sec-title-laptop">
                        <h2>@lang('message.request-money.section-b.title')</h2>
                        <p>@lang('message.request-money.section-b.sub-title')</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--End Section B-->

    <!--Start Section C -->
    <section class="laptop-app  padding-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sec-title-laptop">
                        <h2>Use the Ashpath Mobile App To Easily Request Money.</h2>
                        <p>Anyone with an email address can receive an Escrow transaction request, whether they have an account or not. They can pay you with PayPal, strip, 2checkout and many more payment corridors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Section C-->

    <!--Start Section D-->
    <section class="sending-money mt-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ theme_asset('public/images/banner/send-money-01.png') }}" alt="Phone Image"
                         class="img-responsive img-fluid"/>
                </div>
                <div class="col-md-6">
                    <div class="sec-title" style="padding-top: 50px;">
                        <h2>Safely buy and sell products and services using our Secure P2P system</h2>
                        <p>Transfer funds to your friends & family conveniently through the Ashpath mobile app, bank account or others payment gateway. Funds directly go into your account whether the recipient have any account or not. You can send/request for money via different type of Payment Gateway with different currencies.</p>
                        <!-- <a href="#"> Learn more about Paymoney fees</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Section D-->

@endsection
@section('js')
    <script>

    </script>
@endsection
