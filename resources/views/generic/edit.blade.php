@extends('dashboard.index')
    @section('content')
    <div class="col-md-8">
        <form action="{{ route('generic.update',['generic'=>$generic_name->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold" for="brand_name">Generic/Group Name :</label>
                            <input type="text" class="form-control form-control-sm generic_name" value="{{$generic_name->generic_name ?? ''}}" name="generic_name" id="generic_name" required/>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="dose">Dose :</label>
                            <input type="text" class="form-control form-control-sm dose" value="{{$generic_name->dose ?? ''}}" name="dose" id="dose" required/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold" for="mode_of_action">Mode Of Action :</label>
                            <input type="text" class="form-control form-control-sm mode_of_action" value="{{$generic_name->mode_of_action ?? ''}}" name="mode_of_action" id="mode_of_action" required/>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="status">Status :</label>
                            <select class="form-control select2" name="status" id="status">
                                <option value="1" {{$generic_name->status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="0" {{$generic_name->status == 0 ? 'selected' : ''}}>De-Active</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-right">
                        <button type="submit" class="btnSubmit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@stop
