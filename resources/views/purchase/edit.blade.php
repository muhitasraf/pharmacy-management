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
    <form action="{{ route('purchase.store')}}" method="POST">
        @csrf
        {{-- @dd($purchase_data[0]->company_id) --}}
        <div class="row">
            <!-- company name control -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="company_name">Supplier Name :</label>
                    <select class="form-control select2 company_name" name="company_name" id="company_name">
                        <option value="0">Select Company</option>
                        @foreach ($company_name as $company)
                            @php
                                $selected = '';
                                if($purchase_data[0]->company_id == $company->id){
                                    $selected = 'selected';
                                }
                                echo "<option value='" . $company->id . "' $selected>" . $company->company_name . "</option>";
                            @endphp

                        @endforeach
                    </select>
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="invoice_no">Invoice No :</label>
                    <input type="text" class="form-control form-control-sm" name="invoice_no" value="{{ $purchase_data[0]->invoice_no ?? ''}}" id="invoice_no" readonly>
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="purchase_date">Purchase Date :</label>
                    <input type="date" class="form-control form-control-sm purchase_date" name="purchase_date" value="{{ $purchase_data[0]->tran_date }}" id="purchase_date">
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="remarks">Remarks :</label>
                    <input type="text" class="form-control form-control-sm remarks" name="remarks" placeholder="Remarks" id="remarks">
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <input type="button" value="Add Row" id="add_row_btn" class="btn btn-primary add_row_btn" />
            <table class="table table-bordered table-striped mt-2 row_add purchase_table">
                <thead>
                    <tr>
                        <th>Medicine Name</th>
                        <th>Group Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="append_row">
                    @foreach ($purchase_data as $purchase)
                        <tr>
                            <td>
                                <select class="form-control select2_1 select2 brand_name" style="width : 100%;" name="brand_name[]" id="brand_name">
                                    <option value="0">Select Medicine</option>
                                    @php
                                        foreach($brand_data as $brand){
                                            $selected = '';
                                            if($purchase->brand_id == $brand->id){
                                                $selected = 'selected';
                                            }
                                            echo "<option value='$brand->id' $selected>$brand->brand_name</option>";
                                        }
                                    @endphp
                                </select>
                            </td>
                            <td>
                                <input type="text" name="generic_name[]" value="{{ $purchase->brand_name }}" class="form-control form-control-sm generic_name" readonly/>
                                <input type="hidden" name="generic_id[]" value="{{ $purchase->generic_id }}" class="form-control form-control-sm generic_id" readonly/>
                            </td>
                            <td><input type="text" name="price[]" value="{{ $purchase->price }}" class="form-control form-control-sm price" readonly/></td>
                            <td><input type="text" name="qty[]" value="{{ $purchase->qty }}" class="form-control form-control-sm qty" /></td>
                            <td><input type="text" name="total[]" value="{{ $purchase->total_price }}" class="form-control form-control-sm total" readonly/></td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger remove_row" value="delete">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">total</td>
                        <td><input type="text" name="total_qty" class="form-control form-control-sm total_qty" readonly/></td>
                        <td><input type="text" name="grand_total" class="form-control form-control-sm grand_total" readonly/></td>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
        <!-- horizontal line -->
        <div class="row col-md-12">
            <hr class="col-md-12 float-left" style="padding: 0px; border-top: 2px solid  #02b6ff;">
        </div>
        <!-- form submit button -->
        <div class="row col-md-12">
            &emsp;
            <div class="form-group m-auto">
                <button class="btn btn-primary">ADD Company</button>
            </div>
        </div>
    </form>
@stop
@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {

        $('.company_name, .add_row_btn').on('change click',function(){
            let company_id = $('.company_name').val();
            $.ajax({
                url: '{{ route("purchase.medicine_list") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'company_id':company_id},
                success: function(result){
                    let brand = JSON.parse(result);
                    let option = '<option value="0">Select Medicine</option>';
                    for(let i=0;i<brand.length;i++){
                        option += '<option value="'+brand[i]['id']+'">'+brand[i]['brand_name']+'-'+brand[i]['strength']+'</option>';
                    }
                    $('.brand_name').empty().append(option);
                }
            });
        });

        $('.purchase_table').on('change', '.brand_name',function(){
            let this_key = $(this);
            let brand_id = this_key.val();

            $.ajax({
                url: '{{ route("purchase.single_brand") }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'brand_id':brand_id},
                success: function(result){
                    if(result.length){
                        let brand_data = JSON.parse(result)[0];
                        this_key.closest('tr').find('td input.generic_name').val(brand_data['generic_name']);
                        this_key.closest('tr').find('td input.generic_id').val(brand_data['generic_id']);
                        this_key.closest('tr').find('td input.price').val(brand_data['price']);
                        let qty = this_key.closest('tr').find('td input.qty').val()??1;
                        this_key.closest('tr').find('td input.total').val(qty*brand_data['price']);
                        this_key.closest('tr').find('td input.qty').focus();
                    }else{
                        toastr.success("Something went wrong!");
                    }

                }
            });
        });

        $('.purchase_table').on('keyup', '.qty',function(){
            let qty = $(this).closest('tr').find('td input.qty').val()??0;
            let price = $(this).closest('tr').find('td input.price').val()??0;
            $(this).closest('tr').find('td input.total').val(qty*price);
            calculate_total();
        });


    });
    $('table.purchase_table').on('click', '.remove_row', async function () {
        await remove_row($(this));
        calculate_total();
    });
    calculate_total();
    function calculate_total(){
        let total_qty = 0;
        $('.qty').each(function(){
            if($(this).val()){
                total_qty += parseFloat($(this).val());
            }
        });
        $('.total_qty').val(total_qty);

        let grand_total = 0;
        $('.total').each(function(){
            if($(this).val()){
                grand_total += parseFloat($(this).val());
            }
        });
        $('.grand_total').val(grand_total);
    }

</script>
@stop
