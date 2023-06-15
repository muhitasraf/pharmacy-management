@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-success btn-sm mb-3" href="{{ route('customer.create')}}">
                Add New Customer
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 5%;">SL.</th>
                            <th style="width: 15%;">Customer Name</th>
                            <th style="width: 20%;">Customer Number</th>
                            <th style="width: 10%;">Customer Type</th>
                            <th style="width: 10%;">Address</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customer_list as $key=>$customer)
                        <tr>
                            <td>{{ ++$key}}</td>
                            <td>{{ $customer->full_name}}</td>
                            <td>{{ $customer->contact_number}}</td>
                            <td>{{ $customer->customer_type == 1 ? "General" : "Regular"}}</td>
                            <td>{{ $customer->address}}</td>
                            <td>{{ $customer->status == 1 ? "Active" : "InActive"}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ URL::to('customer/'.$customer->id.'/edit') }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-success btn-sm" href="{{ URL::to('customer/'.$customer->id ) }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="{{ route('customer.destroy', $customer->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" style="display: inline-block;" onclick="return confirm('Are you sure to delete?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
