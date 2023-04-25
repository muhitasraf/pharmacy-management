@extends('dashboard.index')
    @section('content')
    <div class="col-md-8">
        <form action="<?php echo route('generic.store');?>" method="post">
        @csrf
        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold" for="brand_name">Generic/Group Name :</label>
                        <input type="text" class="form-control form-control-sm generic_name" placeholder="Generic/Group Name" name="generic_name" id="generic_name" required/>
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="dose">Dose :</label>
                        <input type="text" class="form-control form-control-sm dose" placeholder="Details About Dose" name="dose" id="dose" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="font-weight-bold" for="mode_of_action">Mode Of Action :</label>
                        <input type="text" class="form-control form-control-sm mode_of_action" placeholder="Details Mode Of Action" name="mode_of_action" id="mode_of_action" required/>
                    </div>
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
                <div class="col-md-12 text-right">
                    <button type="submit" class="btnSubmit">Submit</button>
                </div>
            </div>
        </div>
        </form>
    </div>
@stop
