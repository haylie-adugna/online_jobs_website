@extends('welcome')
@section('content')

            <!-- Content Header (Page header) -->

                <div class="page-header card">
                <div class="row align-items-end">
                <div class="col-lg-12">
                <div class="page-header-title">
                <i class="feather icon-layers bg-c-blue"></i>
                <div class="d-inline">
                <h5>Widget statistic</h5>
                <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                <li class="breadcrumb-item">
                <a href="index.html"><i class="feather icon-home"></i></a>
                </li>
                <li class="breadcrumb-item"><a href="#!">Widget</a> </li>
                <li class="breadcrumb-item"><a href="#!">statistic</a> </li>
                </ul>
                </div>
                </div>
                </div>
                </div>

                <div class="pcoded-inner-content">
                <div class="main-body">
                <div class="page-wrapper">
                <div class="page-body">

                <div class="row">

                <div class="col-xl-3 col-md-6">
                <div class="card card-red text-white">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col-8">
                <h4 class="m-b-0">2,563</h4>
                <p class="m-b-0">Visits</p>
                </div>
                <div class="col-4 text-right">
                <i class="fas fa-user f-20"></i>
                </div>
                </div>
                <div id="Widget-line-chart1" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card card-blue text-white">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col-8">
                <h4 class="m-b-0">3,612</h4>
                <p class="m-b-0">Orders</p>
                </div>
                <div class="col-4 text-right">
                <i class="fas fa-shopping-basket f-20"></i>
                </div>
                </div>
                <div id="Widget-line-chart2" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card card-green text-white">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col-8">
                <h4 class="m-b-0">8,654</h4>
                <p class="m-b-0">Likes</p>
                </div>
                <div class="col-4 text-right">
                <i class="fas fa-thumbs-up f-20"></i>
                </div>
                </div>
                <div id="Widget-line-chart3" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card card-yellow text-white">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col-8">
                <h4 class="m-b-0">3,550</h4>
                <p class="m-b-0">Reviews</p>
                </div>
                <div class="col-4 text-right">
                <i class="fas fa-bullhorn f-20"></i>
                </div>
                </div>
                <div id="Widget-line-chart4" class="chart-line chart-shadow" style="width:100%;height:75px"></div>
                </div>
                </div>
                </div>


                <div class="col-xl-12">
                <div class="card proj-progress-card">
                <div class="card-block">
                 <div class="row">
                <div class="col-xl-3 col-md-6">
                <h6>Published Project</h6>
                <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                <div class="progress">
                <div class="progress-bar bg-c-red" style="width:25%"></div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <h6>Completed Task</h6>
                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                <div class="progress">
                <div class="progress-bar bg-c-blue" style="width:65%"></div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <h6>Successfull Task</h6>
                <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                <div class="progress">
                <div class="progress-bar bg-c-green" style="width:85%"></div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <h6>Ongoing Project</h6>
                <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                <div class="progress">
                <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>


                <div class="col-xl-4 col-md-12">
                <div class="card sos-st-card facebook">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col">
                <h3 class="m-b-0"><i class="fab fa-facebook-f"></i> 3.56k</h3>
                </div>
                <div class="col-auto">
                <h5 class="m-b-0">Likes</h5>
                </div>
                 <div class="col-auto"><i class="fas fa-arrow-up text-c-green"></i></div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card sos-st-card twitter">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col">
                <h3 class="m-b-0"><i class="fab fa-twitter"></i> 3k</h3>
                </div>
                <div class="col-auto">
                <h5 class="m-b-0">Followers</h5>
                </div>
                <div class="col-auto"><i class="fas fa-arrow-up text-c-green"></i></div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card sos-st-card linkedin">
                <div class="card-block">
                <div class="row align-items-center">
                <div class="col">
                <h3 class="m-b-0"><i class="fab fa-linkedin-in"></i> 2k</h3>
                </div>
                <div class="col-auto">
                <h5 class="m-b-0">Connections</h5>
                </div>
                <div class="col-auto"><i class="fas fa-arrow-down text-c-red"></i></div>
                </div>
                </div>
                </div>
                </div>


                <div class="col-xl-4 col-md-12">
                <div class="card comp-card">
                <div class="card-body">
                <div class="row align-items-center">
                <div class="col">
                <h6 class="m-b-25">Impressions</h6>
                <h3 class="f-w-700 text-c-blue">1,563</h3>
                <p class="m-b-0">May 23 - June 01 (2017)</p>
                </div>
                <div class="col-auto">
                <i class="fas fa-eye bg-c-blue"></i>
                </div>
                </div>
                 </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card comp-card">
                <div class="card-body">
                <div class="row align-items-center">
                <div class="col">
                <h6 class="m-b-25">Goal</h6>
                <h3 class="f-w-700 text-c-green">30,564</h3>
                <p class="m-b-0">May 23 - June 01 (2017)</p>
                </div>
                <div class="col-auto">
                <i class="fas fa-bullseye bg-c-green"></i>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card comp-card">
                <div class="card-body">
                <div class="row align-items-center">
                <div class="col">
                <h6 class="m-b-25">Impact</h6>
                <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                <p class="m-b-0">May 23 - June 01 (2017)</p>
                </div>
                <div class="col-auto">
                <i class="fas fa-hand-paper bg-c-yellow"></i>
                </div>
                </div>
                </div>
                </div>
                </div>


                <div class="col-xl-4 col-md-12">
                <div class="card proj-t-card">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col-auto">
                <i class="far fa-calendar-check text-c-red f-30"></i>
                </div>
                <div class="col p-l-0">
                <h6 class="m-b-5">Ticket Answered</h6>
                <h6 class="m-b-0 text-c-red">Live Update</h6>
                </div>
                </div>
                <div class="row align-items-center text-center">
                <div class="col">
                 <h6 class="m-b-0">327</h6></div>
                <div class="col"><i class="fas fa-exchange-alt text-c-red f-18"></i></div>
                <div class="col">
                <h6 class="m-b-0">10 Days</h6></div>
                </div>
                <h6 class="pt-badge bg-c-red">53%</h6>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card proj-t-card">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col-auto">
                <i class="fas fa-paper-plane text-c-green f-30"></i>
                </div>
                <div class="col p-l-0">
                <h6 class="m-b-5">Project Launched</h6>
                <h6 class="m-b-0 text-c-green">Live Update</h6>
                </div>
                </div>
                <div class="row align-items-center text-center">
                <div class="col">
                <h6 class="m-b-0">3 Year</h6></div>
                <div class="col"><i class="fas fa-exchange-alt text-c-green f-18"></i></div>
                <div class="col">
                <h6 class="m-b-0">623</h6></div>
                </div>
                <h6 class="pt-badge bg-c-green">76%</h6>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card proj-t-card">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col-auto">
                <i class="fas fa-lightbulb text-c-yellow f-30"></i>
                </div>
                <div class="col p-l-0">
                <h6 class="m-b-5">Unique Innovation</h6>
                <h6 class="m-b-0 text-c-yellow">Live Update</h6>
                </div>
                </div>
                <div class="row align-items-center text-center">
                <div class="col">
                <h6 class="m-b-0">1 Month</h6></div>
                <div class="col"><i class="fas fa-exchange-alt text-c-yellow f-18"></i></div>
                <div class="col">
                <h6 class="m-b-0">248</h6></div>
                </div>
                <h6 class="pt-badge bg-c-yellow">73%</h6>
                </div>
                </div>
                </div>


                <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-red">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col">
                <h6 class="m-b-5 text-white">Total Profit</h6>
                <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                </div>
                <div class="col-auto">
                <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-blue">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col">
                <h6 class="m-b-5 text-white">Total Orders</h6>
                <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                </div>
                <div class="col-auto">
                <i class="fas fa-database text-c-blue f-18"></i>
                </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-green">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col">
                <h6 class="m-b-5 text-white">Average Price</h6>
                <h3 class="m-b-0 f-w-700 text-white">$6,780</h3>
                </div>
                <div class="col-auto">
                <i class="fas fa-dollar-sign text-c-green f-18"></i>
                </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card prod-p-card card-yellow">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col">
                <h6 class="m-b-5 text-white">Product Sold</h6>
                <h3 class="m-b-0 f-w-700 text-white">6,784</h3>
                </div>
                <div class="col-auto">
                <i class="fas fa-tags text-c-yellow f-18"></i>
                </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From Previous Month</p>
                </div>
                </div>
                </div>


                <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                <div class="card-body">
                <p class="m-b-30 bg-c-red lbl-card"><i class="fas fa-folder-open"></i> Open Tickets</p>
                <div class="text-center">
                <h2 class="m-b-0 d-inline-block text-c-red">128</h2>
                <p class="m-b-0 d-inline-block">Tickets</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-down m-r-10 f-18 text-c-red"></i>From Previous Month</p>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                <div class="card-body">
                <p class="m-b-30 bg-c-blue lbl-card"><i class="fas fa-file-archive"></i> Close Tickets</p>
                <div class="text-center">
                <h2 class="m-b-0 d-inline-block text-c-blue">134</h2>
                <p class="m-b-0 d-inline-block">Tickets</p>
                 <p class="m-b-0 m-t-15"><i class="fas fa-caret-up m-r-10 f-18 text-c-blue"></i>From Previous Month</p>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                <div class="card-body">
                <p class="m-b-30 bg-c-green lbl-card"><i class="fas fa-users"></i> New Clients</p>
                <div class="text-center">
                <h2 class="m-b-0 d-inline-block text-c-green">307</h2>
                <p class="m-b-0 d-inline-block">Clients</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-up m-r-10 f-18 text-c-green"></i>From Previous Month</p>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card ticket-card">
                <div class="card-body">
                <p class="m-b-30 bg-c-yellow lbl-card"><i class="fas fa-database"></i> New Orders</p>
                <div class="text-center">
                <h2 class="m-b-0 d-inline-block text-c-yellow">231</h2>
                <p class="m-b-0 d-inline-block">Orders</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-up m-r-10 f-18 text-c-yellow"></i>From Previous Month</p>
                </div>
                </div>
                </div>
                </div>


                <div class="col-xl-4 col-md-12">
                <div class="card analytic-card card-green">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col-auto">
                <i class="fas fa-shopping-cart text-c-green f-18 analytic-icon"></i>
                </div>
                <div class="col text-right">
                <h3 class="m-b-5 text-white">15,678</h3>
                <h6 class="m-b-0 text-white">Total Sales</h6>
                </div>
                </div>
                <p class="m-b-0  text-white d-inline-block">Total Income : </p>
                <h5 class=" text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                <h6 class="m-b-0 d-inline-block  text-white float-right"><i class="fas fa-caret-up m-r-10 f-18"></i>10%</h6>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card analytic-card card-blue">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col-auto">
                <i class="fas fa-users text-c-blue f-18 analytic-icon"></i>
                </div>
                <div class="col text-right">
                <h3 class="m-b-5 text-white">1,678</h3>
                <h6 class="m-b-0 text-white">Total Users</h6>
                </div>
                </div>
                <p class="m-b-0 text-white d-inline-block">Total Revenue : </p>
                <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                <h6 class="m-b-0 d-inline-block text-white float-right"><i class="fas fa-caret-up m-r-10 f-18"></i>30%</h6>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card analytic-card card-red">
                <div class="card-body">
                <div class="row align-items-center m-b-30">
                <div class="col-auto">
                <i class="fas fa-file-code text-c-red f-18 analytic-icon"></i>
                </div>
                <div class="col text-right">
                <h3 class="m-b-5 text-white">15,678</h3>
                <h6 class="m-b-0 text-white">Total Project</h6>
                </div>
                </div>
                <p class="m-b-0 d-inline-block text-white">Active Projects : </p>
                <h5 class="text-white d-inline-block m-b-0 m-l-10">$2,451</h5>
                <h6 class="m-b-0 d-inline-block text-white float-right"><i class="fas fa-caret-down m-r-10 f-18"></i>10%</h6>
                </div>
                </div>
                </div>


                <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                <div class="card-header">
                <h5>Facebook Source</h5>
                </div>
                <div class="card-body">
                <p class="m-b-10">Page Profile</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-facebook" style="width:25%"></div>
                </div>
                <p class="m-b-10">Favorite</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-facebook" style="width:85%"></div>
                </div>
                <p class="m-b-10">Like Story</p>
                <div class="progress">
                <div class="progress-bar bg-facebook" style="width:65%"></div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                <div class="card-header">
                <h5>Twitter Source</h5>
                </div>
                <div class="card-body">
                <p class="m-b-10">Wall Profile</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-twitter" style="width:85%"></div>
                </div>
                <p class="m-b-10">Favorite</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-twitter" style="width:25%"></div>
                </div>
                <p class="m-b-10">Like Tweets</p>
                <div class="progress">
                <div class="progress-bar bg-twitter" style="width:65%"></div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                <div class="card-header">
                <h5>Google+ Source</h5>
                </div>
                <div class="card-body">
                <p class="m-b-10">Profile</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-googleplus" style="width:65%"></div>
                </div>
                <p class="m-b-10">Connect</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-googleplus" style="width:15%"></div>
                </div>
                <p class="m-b-10">Like News</p>
                <div class="progress">
                <div class="progress-bar bg-googleplus" style="width:95%"></div>
                </div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card social-res-card">
                <div class="card-header">
                <h5>Linkedin Source</h5>
                </div>
                <div class="card-body">
                <p class="m-b-10">Profile</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-linkedin" style="width:45%"></div>
                </div>
                <p class="m-b-10">Connect</p>
                <div class="progress m-b-30">
                <div class="progress-bar bg-linkedin" style="width:85%"></div>
                </div>
                <p class="m-b-10">Like Posts</p>
                <div class="progress">
                <div class="progress-bar bg-linkedin" style="width:35%"></div>
                </div>
                </div>
                </div>
                </div>


                <div class="col-xl-12">
                <div class="card product-progress-card">
                <div class="card-block">
                <div class="row pp-main">
                <div class="col-xl-3 col-md-6">
                <div class="pp-cont">
                <div class="row align-items-center m-b-20">
                <div class="col-auto">
                <i class="fas fa-cube f-24 text-mute"></i>
                </div>
                <div class="col text-right">
                <h2 class="m-b-0 text-c-blue">2476</h2>
                </div>
                </div>
                <div class="row align-items-center m-b-15">
                <div class="col-auto">
                <p class="m-b-0">Total Product</p>
                 </div>
                <div class="col text-right">
                <p class="m-b-0 text-c-blue"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
                </div>
                </div>
                <div class="progress">
                <div class="progress-bar bg-c-blue" style="width:45%"></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="pp-cont">
                <div class="row align-items-center m-b-20">
                <div class="col-auto">
                <i class="fas fa-tag f-24 text-mute"></i>
                </div>
                <div class="col text-right">
                <h2 class="m-b-0 text-c-red">843</h2>
                </div>
                </div>
                <div class="row align-items-center m-b-15">
                <div class="col-auto">
                <p class="m-b-0">New Orders</p>
                </div>
                <div class="col text-right">
                <p class="m-b-0 text-c-red"><i class="fas fa-long-arrow-alt-down m-r-10"></i>34%</p>
                </div>
                </div>
                <div class="progress">
                <div class="progress-bar bg-c-red" style="width:75%"></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="pp-cont">
                <div class="row align-items-center m-b-20">
                <div class="col-auto">
                <i class="fas fa-random f-24 text-mute"></i>
                </div>
                <div class="col text-right">
                <h2 class="m-b-0 text-c-yellow">63%</h2>
                </div>
                </div>
                 <div class="row align-items-center m-b-15">
                <div class="col-auto">
                <p class="m-b-0">Conversion Rate</p>
                </div>
                <div class="col text-right">
                <p class="m-b-0 text-c-yellow"><i class="fas fa-long-arrow-alt-up m-r-10"></i>64%</p>
                </div>
                </div>
                <div class="progress">
                <div class="progress-bar bg-c-yellow" style="width:65%"></div>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="pp-cont">
                <div class="row align-items-center m-b-20">
                <div class="col-auto">
                <i class="fas fa-dollar-sign f-24 text-mute"></i>
                </div>
                <div class="col text-right">
                <h2 class="m-b-0 text-c-green">41M</h2>
                </div>
                </div>
                <div class="row align-items-center m-b-15">
                <div class="col-auto">
                <p class="m-b-0">Conversion Rate</p>
                </div>
                <div class="col text-right">
                <p class="m-b-0 text-c-green"><i class="fas fa-long-arrow-alt-up m-r-10"></i>54%</p>
                </div>
                </div>
                <div class="progress">
                <div class="progress-bar bg-c-green" style="width:35%"></div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>


                <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                <div class="card-body text-center">
                <h2 class="text-facebook m-b-20"><i class="fab fa-facebook-f"></i></h2>
                <h3 class="text-facebook f-w-700">6,750</h3>
                <p>Likes</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-up m-r-10 f-18 text-c-green"></i>223 from last 7 days</p>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                <div class="card-body text-center">
                <h2 class="text-twitter m-b-20"><i class="fab fa-twitter"></i></h2>
                <h3 class="text-twitter f-w-700">9,752</h3>
                <p>Tweets</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-up m-r-10 f-18 text-c-green"></i>623 from last 7 days</p>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                <div class="card-body text-center">
                <h2 class="text-dribbble m-b-20"><i class="fab fa-dribbble"></i></h2>
                <h3 class="text-dribbble f-w-700">8,752</h3>
                <p>Followers</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-up m-r-10 f-18 text-c-green"></i>623 from last 7 days</p>
                </div>
                </div>
                </div>
                <div class="col-xl-3 col-md-6">
                <div class="card social-card">
                <div class="card-body text-center">
                <h2 class="text-linkedin m-b-20"><i class="fab fa-linkedin-in"></i></h2>
                <h3 class="text-linkedin f-w-700">952</h3>
                <p>Followers</p>
                <p class="m-b-0 m-t-15"><i class="fas fa-caret-down m-r-10 f-18 text-c-red"></i>98 from last 7 days</p>
                </div>
                </div>
                </div>


                <div class="col-xl-4 col-md-12">
                <div class="card bg-facebook soc-cont-card">
                <div class="card-block">
                <div class="soc-slider">
                <div class="owl-carousel" id="fb-slider">
                <div class="item">
                <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                <div class="num-block">
                <i class="far fa-thumbs-up m-r-10"></i>5
                </div>
                <div class="num-block">
                <i class="far fa-comments m-r-10"></i>1
                </div>
                </div>
                <div class="item">
                <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                <div class="num-block">
                <i class="far fa-thumbs-up m-r-10"></i>5
                </div>
                <div class="num-block">
                <i class="far fa-comments m-r-10"></i>1
                </div>
                </div>
                </div>
                </div>
                <i class="fab fa-facebook-f soc-cont-icon"></i>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card bg-twitter soc-cont-card">
                <div class="card-block">
                <div class="soc-slider">
                <div class="owl-carousel" id="tw-slider">
                <div class="item">
                <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                <div class="num-block">
                <i class="far fa-thumbs-up m-r-10"></i>5
                </div>
                <div class="num-block">
                <i class="far fa-comments m-r-10"></i>1
                </div>
                </div>
                <div class="item">
                <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                <div class="num-block">
                <i class="far fa-thumbs-up m-r-10"></i>5
                </div>
                <div class="num-block">
                <i class="far fa-comments m-r-10"></i>1
                </div>
                 </div>
                </div>
                </div>
                <i class="fab fa-twitter soc-cont-icon"></i>
                </div>
                </div>
                </div>
                <div class="col-xl-4 col-md-6">
                <div class="card bg-googleplus soc-cont-card">
                <div class="card-block">
                <div class="soc-slider">
                <div class="owl-carousel" id="gp-slider">
                <div class="item">
                <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                <div class="num-block">
                <i class="far fa-thumbs-up m-r-10"></i>5
                </div>
                <div class="num-block">
                <i class="far fa-comments m-r-10"></i>1
                </div>
                </div>
                <div class="item">
                <p>Lorem Ipsum is simply of the dumy scrambled it to make a type specimen book.</p>
                <div class="num-block">
                <i class="far fa-thumbs-up m-r-10"></i>5
                </div>
                <div class="num-block">
                <i class="far fa-comments m-r-10"></i>1
                </div>
                </div>
                </div>
                </div>
                <i class="fab fa-google-plus-g soc-cont-icon"></i>
                </div>
                </div>
                </div>

                </div>

                </div>
                </div>
                </div>
                </div>
                </div>

                <div id="styleSelector">
                </div>

                </div>
                </div>
                </div>
                </div>


        <!-- /.container -->
    </div>
    </div>

    <!-- /.content-wrapper -->
@endsection
