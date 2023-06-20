@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <a class="btn btn-success btn-sm mb-3" href="{{ route('purchase.index')}}">
                Purrchase List
            </a>
        </div>
    </div>

    <!-- company details content -->
    <div class="row">
        <!-- company name control -->
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="form-group">
                <label class="font-weight-bold" for="company_name">Supplier Name :</label>
                {{$company_name->company_name}}
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="form-group">
                <label class="font-weight-bold" for="invoice_no">Invoice No :</label>
                {{ $purchase_data[0]->invoice_no ?? ''}}
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="form-group">
                <label class="font-weight-bold" for="purchase_date">Purchase Date :</label>
                {{ $purchase_data[0]->tran_date }}
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="form-group">
                <label class="font-weight-bold" for="remarks">Remarks :</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-striped mt-2 row_add purchase_table">
                <thead>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Group Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="append_row">
                    @foreach ($purchase_data as $purchase)
                        <tr>
                            <td>
                                {{ $purchase->brand_name }}
                            </td>
                            <td>
                                {{ $purchase->brand_name }}
                            </td>
                            <td>
                                {{ $purchase->price }}
                            <td>
                                {{ $purchase->qty }}
                            </td>
                            <td>
                                {{ $purchase->total_price }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">Total</td>
                        <td>{{$purchase_data[0]->total_qty}}</td>
                        <td>{{$purchase_data[0]->grand_total}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@stop

