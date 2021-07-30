@extends('Front.Layout.master')
@section('content')
<div id="page-content">
<div class="divider-md" style="height: 78px;"></div>
<div class="divider-sm" style="height: 40px;"></div>
<div class="container">
    <div class="row site-breadcrumbs justify-content-flex-start">
        @include('Front.Widgets.breadcrumb')
    </div>
    <div class="divider-md"></div>
    <div class="row text-center justify-content-center">
        <h1 class="title-text">
            Need to Know for Car Hire Baku
        </h1>
        <div class="divider-sm"></div>
    </div>
</div>
<div class="container-fluid about-text company-page ndn no-borders">

    <div class="row">
        <div class="col-lg-6 second">
            <div class="main-content">
                <p>To Car Hire Baku Ram Servis, you have to meet the following conditions:</p>
                <p><br />&bull; You have to be 24 years old or more;<br />&bull; You must have a driving license and passport;<br />&bull; For car hire Baku you should have at least 2 years of driving experience;<br />&bull; You have to make a payment for the full rent period (prepayment);<br />&bull; Deposit amount for car hire is 150 AZN;</p>
                <p>You will get a discount to the daily rental price if you rent a car from Ram Servis for:<br />5-10 days 10% discount<br />10-15 days 20% discount<br />15-30 days 30% discount<br /><br />If you meet all condition for car hire in Baku specified above, Rent a Car by clicking the button specified below</p>
                </div>
                <div class="btn-wrapper mt-5">
                    <a href="#!" class="primary-action-button btn">Rent a Car Online</a>
                </div>
        </div>
        <div class="col-lg-6 first" style="padding-right: 0px
            !important;">
            <img src="/front/images/imgm.jpg" alt="">
        </div>
    </div>
</div>

<div class="divider-md" style="height: 78px;"></div>
<div class="divider-sm" style="height: 40px;"></div>
@endsection