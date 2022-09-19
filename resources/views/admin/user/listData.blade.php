@extends('admin.layouts.default')

@section('title', 'User List')

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
                <h5 class="panel-title">User list</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                    <a href="{{ url('users/create') }}"><button style="margin-left:10px;"
                            class="btn btn-primary btn-sm ">Add New</button></a>
                </div>
            </div>

            <div class="panel-body">

                <table class="table datatable-basic">
                    <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($users))

                            @foreach ($users as $key => $user)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td><span class="label label-success">Active</span></td>

                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm "><a href="{{ url('users/edit', $user->id) }}"style="color:white;"><i class="icon-pencil5"></i></a></button>
   
                                        <form action="{{ url('users/destroy', $user->id) }}" method="POST">
                                             @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger btn-sm" type="submit"> <i class="icon-bin"></i> </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        @else
                            <tr colspan="5">No Data Found!</tr>
                        @endif

                    </tbody>
                    
                </table>

            </div>







        </div>
        <!-- /basic datatable -->

    </div>
    <!-- /content area -->

@endsection
