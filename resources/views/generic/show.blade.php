@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 15%;">Generic Name</th>
                            <th style="width: 20%;">Dose</th>
                            <th style="width: 20%;">Mode of Action</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $generic_name->generic_name}}</td>
                            <td>{{ $generic_name->dose}}</td>
                            <td>{{ $generic_name->mode_of_action}}</td>
                            <td>{{ $generic_name->status ==1 ? 'Active': 'InActive'}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
