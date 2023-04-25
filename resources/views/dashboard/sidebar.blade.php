<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #004343;">
    <div class="sidebar-sticky">

        <ul class="nav flex-column" id="menu">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('dashboard')}}">
                    <i class="fa-solid fa-house"></i> Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#">
                    <i class="fa-solid fa-prescription-bottle-medical mr-2"></i> Medicine Brand
                </a>
                <ul class="list-unstyled ml-3">
                    <li class="list-item">
                        <a href="{{ route('brands.create') }}" class="nav-link active">
                            <span class="menu-collapsed">Add Brand</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="{{ route('brands.index') }}" class="nav-link active">
                            <span class="menu-collapsed">Brand List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-solid fa-flask-vial"></i> Medicine Generic
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('generic.create')}}" class="nav-link active">
                            <span class="menu-collapsed">Add Generic Name</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('generic.index')}}" class="nav-link active">
                            <span class="menu-collapsed">Generic List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-solid fa-pills"></i> Type
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('medicine_type.create')}}" class="nav-link active">
                            <span class="menu-collapsed">Add Type</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('medicine_type.index')}}" class="nav-link active">
                            <span class="menu-collapsed">Type List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-regular fa-handshake"></i> Customer
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('customer.create')}}" class="nav-link active">
                            <span class="menu-collapsed">Add Customer</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('customer.index')}}" class="nav-link active">
                            <span class="menu-collapsed">Customer List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-solid fa-truck-medical"></i><span class="ml-1">Supplier</span>
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('company.create')}}" class="nav-link active">
                            <span class="menu-collapsed">New Supplier</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('company.index')}}" class="nav-link active">
                            <span class="menu-collapsed">Supplier List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-solid fa-cart-plus"></i> Purchase
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('purchase.create') }}" class="nav-link active">
                            <span class="menu-collapsed">New Purchase</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('purchase.index') }}" class="nav-link active">
                            <span class="menu-collapsed">Purchase List</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{-- <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-solid fa-scale-balanced"></i> Invoice
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('invoice/create') }}" class="nav-link active">
                            <span class="menu-collapsed">Add Invoice</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('invoice') }}" class="nav-link active">
                            <span class="menu-collapsed">Invoice List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="#" >
                    <i class="fa-regular fa-file-lines mr-1"></i> Reports
                </a>
                <ul class="list-unstyled ml-3">
                    <li>
                        <a href="{{ route('report/daily_report') }}" class="nav-link active">
                            <span class="menu-collapsed">Daily Sales</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('report/sales_report') }}" class="nav-link active">
                            <span class="menu-collapsed">Sales Report</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('report/purchase_report') }}" class="nav-link active">
                            <span class="menu-collapsed">Purchase Report</span>
                        </a>
                    </li>
                </ul>
            </li> --}}

        </ul>

    </div>
</nav>


