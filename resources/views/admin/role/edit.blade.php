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
                     <form method="post" action="{{url('admin/role')}}">
                        {{csrf_field()}}
                        <div class="form-group row">
                          <label for="lgFormGroupInput" class="col-sm-4 col-form-label col-form-label-lg">Role Name</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="role_name" placeholder="Name" name="role_name" value="">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="status" class="col-sm-4 col-form-label col-form-label-lg">Role Status</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control form-control-lg" id="status" placeholder="Status" name="status">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="status" class="col-sm-4 col-form-label col-form-label-lg">Role Resources</label>
                          <div class="col-sm-8">
                            @foreach ($resources as $item)
                                <label for="resources[{{$item->id}}]" class="col-sm-12 col-form-label col-form-label-lg">
                                    @if ($item->id==$role->id)
                                    <input type="checkbox" class=" " id="resources[{{$item->id}}]" placeholder="" name="resources[{{$item->id}}]">
                                    @else
                                         <input type="checkbox" checked class=" " id="resources[{{$item->id}}]" placeholder="" name="resources[{{$item->id}}]">
                                    @endif
                                    <span>
                                        {{$item->resource_name}}
                                    </span>
                            </label>
                            @endforeach
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-md-4"></div>
                          <input type="submit" class="btn btn-primary">
                        </div>
                      </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
@endsection
