<div class="row">
    <div class="row col col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats" onclick="location.href='manage_customer.php'">
                <a class="text-dark text-decoration-none" href="manage_customer.php">
                    <span class="h4">6</span>
                    <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                    <div class="small font-weight-bold">Total Customer</div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats" onclick="location.href='manage_supplier.php'">
                <a class="text-dark text-decoration-none" href="manage_supplier.php">
                    <span class="h4">16</span>
                    <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                    <div class="small font-weight-bold">Total Supplier</div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats" onclick="location.href='manage_medicine.php'">
                <a class="text-dark text-decoration-none" href="manage_medicine.php">
                    <span class="h4">5</span>
                    <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                    <div class="small font-weight-bold">Total Medicine</div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats"
                onclick="location.href='manage_medicine_stock.php?out_of_stock'">
                <a class="text-dark text-decoration-none" href="manage_medicine_stock.php?out_of_stock">
                    <span class="h4">2</span>
                    <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                    <div class="small font-weight-bold">Out of Stock</div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats" onclick="location.href='manage_medicine_stock.php?expired'">
                <a class="text-dark text-decoration-none" href="manage_medicine_stock.php?expired">
                    <span class="h4">2</span>
                    <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                    <div class="small font-weight-bold">Expired</div>
                </a>
            </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding: 10px">
            <div class="dashboard-stats" onclick="location.href='manage_invoice.php'">
                <a class="text-dark text-decoration-none" href="manage_invoice.php">
                    <span class="h4">3</span>
                    <span class="h6"><i class="fa fa-play fa-rotate-270 text-warning"></i></span>
                    <div class="small font-weight-bold">Total Invoice</div>
                </a>
            </div>
        </div>
    </div>

    <div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 7px 0; margin-left: 15px;">
        <div class="todays-report">
            <div class="h5">Todays Report</div>
            <table class="table table-bordered table-striped table-hover">
                <tbody>
                    <tr>
                        <th>Total Sales</th>
                        <th class="text-success">Rs. 5199.48</th>
                    </tr>
                    <tr>
                        <th>Total Purchase</th>
                        <th class="text-danger">Rs. 1000</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<hr style="border-top: 1px solid #ffaeae;">

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='new_invoice.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-address-card p-2"></i></span>
                  <div class="h5">Create New Invoice</div>
              </div>
          </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='add_customer.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-handshake p-2"></i></span>
                  <div class="h5">Add New Customer</div>
              </div>
          </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='add_medicine.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-shopping-bag p-2"></i></span>
                  <div class="h5">Add New Medicine</div>
              </div>
          </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='add_supplier.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-group p-2"></i></span>
                  <div class="h5">Add New Supplier</div>
              </div>
          </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='add_purchase.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-bar-chart p-2"></i></span>
                  <div class="h5">Add New Purchase</div>
              </div>
          </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='sales_report.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-book p-2"></i></span>
                  <div class="h5">Sales Report</div>
              </div>
          </div>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" style="padding: 10px;">
          <div class="dashboard-stats" style="padding: 30px 15px;" onclick="location.href='purchase_report.php'">
              <div class="text-center">
          <span class="h1"><i class="fa fa-book p-2"></i></span>
                  <div class="h5">Purchase Report</div>
              </div>
          </div>
    </div>
</div>
