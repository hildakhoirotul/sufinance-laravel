@extends('master')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

<!-- fontawesome -->
<!-- <link rel="stylesheet" href="fonts/font-awesome/css/all.min.css" /> -->
<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" />

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="" class="">
                <i class="fa fa-arrow-left fa-2x " style="color:#00C897;" aria-hidden="true"></i>
            </a>
        </div>
        <div class="col-md-4">
            <div class="text-center title mt-5 ">
                <h1>Budgetting</h1>
            </div>
        </div>
        <div class="col-md-4 ms-auto">
            <div class="text-end add">
                <a href="" class="">
                    <i class="fa fa-plus-square-o fa-2x" style="color:#00C897;" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="expenses-box d-md-flex align-items-center justify-content-between mb-30">
        <div class="expenses-left my-4 d-md-flex align-items-center flex-wrap">
            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
            <div class="expenses-content">
                <h5 class="text-center text-md-left">Start Budget</h5>
            </div>
        </div>
        <h5 class="amount">RP.999.999</h5>
        <div class="expenses-right my-4 flex-shrink-0">
            <a href="#">
                <i class="fa fa-chevron-right fa-2x" style="color:#00C897;" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="expenses-box d-md-flex align-items-center justify-content-between mb-30">
        <div class="expenses-left my-4 d-md-flex align-items-center flex-wrap">
            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
            <div class="expenses-content">
                <h5 class="text-center text-md-left">Start Budget</h5>
            </div>
        </div>
        <h5 class="amount">RP.999.999</h5>
        <div class="expenses-right my-4 flex-shrink-0">
            <a href="#">
                <i class="fa fa-chevron-right fa-2x" style="color:#00C897;" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="expenses-box d-md-flex align-items-center justify-content-between mb-30">
        <div class="expenses-left my-4 d-md-flex align-items-center flex-wrap">
            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
            <div class="expenses-content">
                <h5 class="text-center text-md-left">Start Budget</h5>
            </div>
        </div>
        <h5 class="amount">RP.999.999</h5>
        <div class="expenses-right my-4 flex-shrink-0">
            <a href="#">
                <i class="fa fa-chevron-right fa-2x" style="color:#00C897;" aria-hidden="true"></i></a>
        </div>
    </div>

    <!-- </div> -->

    <!-- START Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-reset justify-content-center">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                    <i class="zmdi zmdi-long-arrow-left"></i>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item">
                <a class="page-link" href="#">
                    <i class="zmdi zmdi-long-arrow-right"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- END Pagination -->
    <!-- </div>
    </div> -->

</div>
@endsection