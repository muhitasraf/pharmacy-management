@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-success btn-sm mb-3" href="{{ route('customer.index') }}">
                Customer List
            </a>
        </div>
    </div>
    <!-- customer details content -->
    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="row col col-md-8">
            <!-- customer name control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="customer_name">Customer Name :</label>
                    <input type="text" class="form-control" name="customer_name" placeholder="Name" id="customer_name">
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <!-- customer contact number control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="contact_number">Contact Number :</label>
                    <input type="number" class="form-control" name="contact_number" placeholder="Contact Number" id="contact_number" onblur="validateContactNumber(this.value, 'number_error');">
                    <code class="text-danger small font-weight-bold float-right" id="number_error" style="display: none;"></code>
                </div>
            </div>
            <!-- customer address control -->
            <div class="row col col-md-12">
                <div class="col col-md-12 form-group">
                    <label class="font-weight-bold" for="customer_address">Address :</label>
                    <textarea class="form-control" name="customer_address" placeholder="Address" id="customer_address" onblur="validateAddress(this.value, 'address_error');"></textarea>
                    <code class="text-danger small font-weight-bold float-right" id="address_error" style="display: none;"></code>
                </div>
            </div>
            <div class="row col col-md-12">
                <div class="col col-md-6 form-group">
                    <label class="font-weight-bold" for="customer_type">Customer Type :</label>
                    <select class="form-control customer_type" name="customer_type" id="customer_type">
                        <option value="1">General</option>
                        <option value="2">Regular</option>
                    </select>
                    <code class="text-danger small font-weight-bold float-right" id="address_error" style="display: none;"></code>
                </div>
                <div class="col col-md-6 form-group">
                    <label class="font-weight-bold" for="customer_status">Status :</label>
                    <select class="form-control customer_status" name="customer_status" id="customer_status">
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
                    <button class="btn btn-primary">ADD Customer</button>
                </div>
            </div>
        </div>
    </form>
@stop
