@extends('dashboard.index')
@section('content')
    <div class="col-md-8">
        <form action="{{route('brands.store')}}" method="post">
            @csrf
            <div class="form-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold" for="brand_name">Brand Name :</label>
                            <input type="text" class="form-control brand_name" placeholder="Brand Name" name="brand_name" id="brand_name" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="packsize">Packing Size :</label>
                            <input type="text" class="form-control packsize" placeholder="Packing e.g. 10 TAB / 100 ML" name="packsize" id="packsize" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold" for="generic_name">Generic Name :</label>
                            <select class="form-control select2 generic_name" name="generic_name" id="generic_name">
                                <option value="0">Select Generic Name</option>
                                @foreach ($generic_name as $generic)
                                    <option value="{{ $generic->id }}">{{ $generic->generic_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="company_name">Company :</label>
                            <select class="form-control select2 company_name" name="company_name" id="company_name">
                                <option value="0">Select Company</option>
                                @foreach ($company_name as $company)
                                    <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold" for="type_name">Type Name :</label>
                            <select class="form-control select2 type_name" name="type_name" id="type_name">
                                @foreach ($type_name as $type)
                                    <option value="{{ $type->id }}">{{ $type->type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="medicine_name">Strength :</label>
                            <input type="text" class="form-control strength" placeholder="120mg/5ml" name="strength" id="strength" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold" for="price">Price :</label>
                            <input type="text" class="form-control price" placeholder="Price" name="price" id="price" required>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold" for="status">Status :</label>
                            <select class="form-control" name="status" id="status">
                                <option value="1">Active</option>
                                <option value="0">De-Active</option>
                            </select>
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
