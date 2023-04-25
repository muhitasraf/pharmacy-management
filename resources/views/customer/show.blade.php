@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-success btn-sm mb-3" href="{{ route('customer.index')}}">
                Customer List
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 15%;">Customer Name</th>
                            <th style="width: 10%;">Number</th>
                            <th style="width: 20%;">Address</th>
                            <th style="width: 15%;">Customer Type</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $customer_data->full_name}}</td>
                            <td>{{ $customer_data->contact_number}}</td>
                            <td>{{ $customer_data->address}}</td>
                            <td>{{ $customer_data->customer_type==1 ? 'General' : 'Regular'}}</td>
                            <td>{{ $customer_data->status==1 ? 'Active': 'InActive'}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
