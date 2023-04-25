@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 5%;">SL.</th>
                            <th style="width: 15%;">Type Name</th>
                            <th style="width: 20%;">Status</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($type_name as $key=>$type){
                        <tr>
                            <td>{{ ++$key}}</td>
                            <td>{{ $type->type_name}}</td>
                            <td>{{ $type->status==1 ? 'Active': 'InActive'}}</td>
                            <td>
                                <a href="{{ URL::to('medicine_type/'.$type->id.'/edit')}}">
                                    <button href="" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ URL::to('medicine_type/'.$type->id)}}">
                                    <button class="btn btn-success btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </a>
                                {{-- <button class="btn btn-danger btn-sm" onclick="confirm('Are You Sure to Delete');">
                                    <i class="fa fa-trash"></i>
                                </button> --}}
                                <form action="{{ route('medicine_type.destroy', $type->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" style="display: inline-block;" onclick="return confirm('Are you sure to delete?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        }
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
