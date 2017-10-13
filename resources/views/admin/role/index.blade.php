@extends('layouts.admin')

@section('content')
 <div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Roles Managment</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Roles Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>View Role</th>
                                                    <th>Create new Role</th>
                                                    <th>Edit Role</th>
                                                    <th>Delete Role</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($role as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->role_name }}</td>
                                                    <td><a href="{{ URL::to('admin/role/'.$item->id) }}"><i class="fa fa-eye"></i></a></td>
                                                    <td><a href="{{ URL::to('admin/role/create') }}"><i class="fa fa-plus"></i></a></td>
                                                    <td><a href="{{ URL::to('admin/role/'.$item->id.'/edit') }}"><i class="fa fa-pencil"></i></a></td>
                                                    <td><a href="{{ URL::to('admin/role/'.$item->id.'/delete') }}"><i class="fa fa-close"></i></a></td>
                                                     <td>{{ $item->status }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
@endsection
