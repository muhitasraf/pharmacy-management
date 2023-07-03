

@extends('dashboard.index')
@section('content')
    <div class="col-md-8">
        <form action="{{route('medicine_type.store')}}" method="POST">
        @csrf
        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold" for="type_name">Medicine Type Name :</label>
                        <input type="text" class="form-control form-control-sm type_name" name="type_name" id="type_name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold" for="status">Status :</label>
                        <select class="form-control select2" name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">De-Active</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="font-weight-bold" for="dose">Description :</label>
                        <textarea name="description" class="form-control form-control-sm description" id="description" cols="10" rows="5"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 text-right">
                    <button type="submit" class="btn btn-info btnSubmit">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@stop
