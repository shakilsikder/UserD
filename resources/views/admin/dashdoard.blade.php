@extends('admin.layouts.default')

@section('title', 'Dashbord')

@section('content')
<!-- Page header -->
<div class="page-header">


    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="datatable_basic.html">Datatables</a></li>
            <li class="active">Basic</li>
        </ul>        
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">

    <!-- Basic datatable -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            {{-- <h5 class="panel-title">Basic datatable</h5> --}}
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            <div class="container">
                <div class="row text-center">
                    <h1>Welcome to <b>Admin</b></h1>
                    <hr>
                    <p>Developer Shakil Sikder</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /basic datatable -->

</div>
<!-- /content area -->

@endsection
