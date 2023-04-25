@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12">
            <!-- <a class="btn btn-success btn-sm mb-3" href="{{ route('purchase.index')}}">
                Purrchase List
            </a> -->
        </div>
    </div>

    <!-- company details content -->
    <form action="{{ route('purchase.store')}}" method="POST">
        @csrf
        <div class="row">
            <!-- company name control -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="company_name">Supplier Name :</label>
                    <select class="form-control select2 company_name" name="company_name" id="company_name">
                        <option value="0">Select Company</option>
                        <?php
                        foreach ($company_name as $company) {
                            echo "<option value='" . $company->id . "'>" . $company->company_name . "</option>";
                        }
                        ?>
                    </select>
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="invoice_no">Invoice No :</label>
                    <input type="text" class="form-control form-control-sm" name="invoice_no" value="{{ $new_invoice_no ?? ''}}" id="invoice_no" readonly>
                    <code class="text-danger small font-weight-bold float-right" id="name_error" style="display: none;"></code>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="form-group">
                    <label class="font-weight-bold" for="purchase_date">Purchase Date :</label>
                    <input type="date" class="form-control form-control-sm purchase_date" name="purchase_date" value="{{ date('Y-m-d')}}" id="purchase_date">
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
                    <tr>
                        <td>
                            <select class="form-control select2_1 select2 brand_name" style="width : 100%;" name="brand_name[]" id="brand_name">
                                <option value="0">Select Medicine</option>
                            </select>
                        </td>
                        <td>
                            <input type="text" name="generic_name[]" value="" class="form-control form-control-sm generic_name" readonly/>
                            <input type="hidden" name="generic_id[]" value="" class="form-control form-control-sm generic_id" readonly/>
                        </td>
                        <td><input type="text" name="price[]" class="form-control form-control-sm price" readonly/></td>
                        <td><input type="text" name="qty[]" class="form-control form-control-sm qty" /></td>
                        <td><input type="text" name="total[]" class="form-control form-control-sm total" readonly/></td>
                        <td>
                            <button type="button" class="btn btn-sm btn-danger remove_row" value="delete">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
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
                <button class="btn btn-primary" onclick="addcompany();">ADD Company</button>
            </div>
        </div>
    </form>
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
                            console.log(brand_data)
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

