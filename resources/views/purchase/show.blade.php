<div class="row">
    <div class="col col-md-12">
        <a class="btn btn-success btn-sm mb-3" href="<?php echo route('company');?>">
            Customer List
        </a>
    </div>
</div>
<div class="row">
    <div class="col col-md-12 table-responsive">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 15%;">Company Name</th>
                        <th style="width: 10%;">Number</th>
                        <th style="width: 10%;">Email</th>
                        <th style="width: 10%;">Address</th>
                        <th style="width: 10%;">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $company_data['company_name'];?></td>
                        <td><?php echo $company_data['company_number'];?></td>
                        <td><?php echo $company_data['company_email'];?></td>
                        <td><?php echo $company_data['company_address'];?></td>
                        <td><?php echo $company_data['status'] == 1 ? "Active" : "InActive";?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>