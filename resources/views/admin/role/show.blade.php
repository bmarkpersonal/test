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
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Role info
                        </div>
                        <div class="panel-body">
        
                            <p><b># - </b> {{ $role->id }}</p>
                            <p><b>Name - </b> {{ $role->role_name }}</p>
                            <p><b>Status - </b> {{ $role->status }}</p>
                             @foreach ($role->resources as $item)
                             <p><b>Role Resource - </b> {{ $item->resource_name }}</p>
                             @endforeach
                        </div>
                        <div class="panel-footer">
                            For user ->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
@endsection
