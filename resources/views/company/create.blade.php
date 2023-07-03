@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-success btn-sm mb-3" href="{{ route('company.index') }}">
                Company List
            </a>
        </div>
    </div>
    <!-- company details content -->
    <form action="{{ route('company.store') }}" method="POST">
        @csrf
        <div class="row col col-md-8">
            <!-- company name control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="company_name">Company Name :</label>
                    <input type="text" class="form-control" name="company_name" placeholder="Name" id="company_name">
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <!-- company contact Email control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="contact_number">Comapany Email :</label>
                    <input type="email" class="form-control" name="company_email" placeholder="Company Email" id="company_email">
                    <code class="text-danger small font-weight-bold float-right" id="number_error" style="display: none;"></code>
                </div>
            </div>
            <!-- company contact number control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="contact_number">Contact Number :</label>
                    <input type="number" class="form-control" name="company_number" placeholder="Company Number" id="company_number">
                    <code class="text-danger small font-weight-bold float-right" id="number_error" style="display: none;"></code>
                </div>
            </div>
            <!-- company address control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="company_address">Address :</label>
                    <textarea class="form-control" name="company_address" placeholder="Address" id="company_address" onblur="validateAddress(this.value, 'address_error');"></textarea>
                    <code class="text-danger small font-weight-bold float-right" id="address_error" style="display: none;"></code>
                </div>
            </div>
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="company_status">Status :</label>
                    <select class="form-control company_status" name="company_status" id="company_status">
                        <option value="1">Active</option>
                        <option value="0">InActive</option>
                    </select>
                    <code class="text-danger small font-weight-bold float-right" id="address_error" style="display: none;"></code>
                </div>
            </div>
            <!-- horizontal line -->
            <div class="col col-md-12">
                <hr class="col-md-12 float-left" style="padding: 0px; width: 95%; border-top: 2px solid  #02b6ff;">
            </div>
            <!-- form submit button -->
            <div class="row col col-md-12">
                &emsp;
                <div class="form-group m-auto">
                    <button class="btn btn-primary">ADD Company</button>
                </div>
            </div>
        </div>
    </form>
@stop
