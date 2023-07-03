@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-success btn-sm mb-3" href="{{ route('company.create')}}">
                New Company
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
                            <th style="width: 15%;">Company Name</th>
                            <th style="width: 10%;">Number</th>
                            <th style="width: 10%;">Email</th>
                            <th style="width: 10%;">Address</th>
                            <th style="width: 10%;">Status</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($company_list as $key=>$company)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{ $company->company_name}}</td>
                                <td>{{ $company->company_number}}</td>
                                <td>{{ $company->company_email}}</td>
                                <td>{{ $company->company_address}}</td>
                                <td>{{ $company->status == 1 ? "Active" : "InActive"}}</td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="{{ URL::to('company/'.$company->id.'/edit')}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-success btn-sm" href="{{ URL::to('company/'.$company->id)}}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <form action="{{ route('company.destroy', $company->id ) }}" method="POST">
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
