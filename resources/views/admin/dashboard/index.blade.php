@extends('admin.layout.main')

@section('container')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">My Dashboard</li>
            </ol>
           
            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-bar-chart"></i>Statistic</h2>
                </div>
                <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
            </div>
        </div>
        <!-- /.container-fluid-->
    </div>
@endsection
