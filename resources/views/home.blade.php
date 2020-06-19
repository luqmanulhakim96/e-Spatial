@extends('layouts.app')+
@section('content')
            <!--Page Body part -->
            <div class="page-body p-4 text-dark">
                <div class="page-heading border-bottom d-flex flex-row">
                    <h5 class="font-weight-normal">Version 1</h5>
                    <small class="mt-2 ml-2">Dashboard</small>
                </div>
                <!-- Small card component -->
                <div class="small-cards mt-5 mb-4">
                    <div class="row">
                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="far fa-user-circle card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">New Leads</p>
                                            <h4 class="font-weight-normal m-0 text-primary">205</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-coins card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Sales</p>
                                            <h4 class="font-weight-normal m-0 text-primary">$666666</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="fas fa-shopping-basket card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Orders</p>
                                            <h4 class="font-weight-normal m-0 text-primary">80</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Col sm 6, col md 6, col lg 3 -->
                        <div class="col-sm-6 col-md-6 col-lg-3 mt-3 mt-lg-0">
                            <!-- Card -->
                            <div class="card border-0 rounded-lg">
                                <!-- Card body -->
                                <div class="card-body">

                                    <div class="d-flex flex-row justify-content-center align-items-center">
                                        <!-- Icon -->
                                        <div class="small-card-icon">
                                            <i class="far fa-money-bill-alt card-icon-bg-primary fa-4x"></i>
                                        </div>
                                        <!-- Text -->
                                        <div class="small-card-text w-100 text-center">
                                            <p class="font-weight-normal m-0 text-muted">Expense</p>
                                            <h4 class="font-weight-normal m-0 text-primary">$1200</h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- Data chart component -->
                <div class="row mb-4">
                    <!-- Col lg 8, col md 12 -->
                    <div class="col-lg-8 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">This Year Sales</div>
                                <!-- Chart -->
                                <div id="echartBar" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>
                    <!-- Col lg 4, col md 12 -->
                    <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                        <!-- Card -->
                        <div class="card border-0 rounded-lg">
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- Card title -->
                                <div class="card-title">Sales by Countries</div>
                                <!-- Chart -->
                                <div id="echartPie" style="width:100%;height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>

                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Col lg 6, col md 12 -->
                    <div class="col-lg-6 col-md-12">
                        <!-- Row -->
                        <div class="row mb-4">
                            <!-- Col lg 6, col md 12 -->
                            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                                <!-- Card -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Card title -->
                                        <div class="text-muted">Last Month Sales</div>
                                        <p class="mb-4 text-primary lead font-weight-bold">$40250</p>
                                    </div>
                                    <!-- Chart -->
                                    <div id="echart1" style="height: 260px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                                </div>

                            </div>

                            <!-- Col lg 6, col md 12 -->
                            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                                <!-- Card -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <!-- Card title -->
                                        <div class="text-muted">Last Week Sales</div>
                                        <p class="mb-4 text-primary lead font-weight-bold">$10250</p>
                                    </div>
                                    <!-- Chart -->
                                    <div id="echart2" style="height: 260px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                                </div>

                            </div>

                        </div>
                        <!-- Row -->
                        <div class="row">
                            <!-- col 12 -->
                            <div class="col-12">
                                <!-- Card -->
                                <div class="card border-0">
                                    <!-- Card header -->
                                    <div class="card-header border-0">
                                        <!-- Card title -->
                                        <p class="card-title d-inline">New Users</p>
                                        <!-- Dropdown -->
                                        <div class="dropdown dropdown-arow-none dropleft float-right">
                                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="fas fa-cog text-secondary-light"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item text-secondary-light">Add new user</a>
                                                <a href="#" class="dropdown-item text-secondary-light">View all user</a>
                                                <a href="#" class="dropdown-item text-secondary-light">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body p-0">
                                        <!-- responsive table -->
                                        <div class="table-responsive">
                                            <table class="table text-dark">
                                                <!-- Table head -->
                                                <thead>
                                                <!-- Head content -->
                                                <tr class="text-center">
                                                    <th width="10%"><p class="mb-0">#</p></th>
                                                    <th width="20%"><p class="mb-0">Name</p></th>
                                                    <th width="10%"><p class="mb-0">Avatar</p></th>
                                                    <th width="30"><p class="mb-0">Email</p></th>
                                                    <th width="15%"><p class="mb-0">Status</p></th>
                                                    <th width="15%"><p class="mb-0">Action</p></th>
                                                </tr>
                                                </thead>
                                                <!-- Table body -->
                                                <tbody>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">1</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Smith Doe</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Smith@gmail.com</p></td>
                                                    <td><span class="badge badge-success badge-pill">Active</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">2</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Jhon Doe</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Jhon@gmail.com</p></td>
                                                    <td><span class="badge badge-info badge-pill">Pending</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">3</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Alex</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Otto@gmail.com</p></td>
                                                    <td><span class="badge badge-warning badge-pill">Not Active</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Table data -->
                                                <tr class="text-center">
                                                    <td><p class="mb-0 font-weight-bold">4</p></td>
                                                    <td><p class="mb-0 font-weight-normal">Mathew Doe	</p></td>
                                                    <td><img src="{{ asset('qbadminui/img/profile.jpg') }}" alt="Avatar" class="profile-avatar w-50 mb-0"></td>
                                                    <td><p class="mb-0 font-weight-normal">Mathew@gmail.com	</p></td>
                                                    <td><span class="badge badge-success badge-pill">Active</span></td>
                                                    <td class="p-3">
                                                        <div class="d-flex flex-row justify-content-around align-items-center">
                                                            <a href="#"><i class="fas fa-pencil-alt text-success"></i></a>
                                                            <a href="#"><i class="fas fa-times-circle text-danger"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>

                                            </table>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col lg 6, col md 12 -->
                    <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                        <!-- row -->
                        <div class="row">
                            <!-- col 12 -->
                            <div class="col-12 mb-4">
                                <!-- Product selling detail section -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="card-title">Top Selling Products</div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="{{ asset('qbadminui/img/headphone-4.jpg') }}" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone E23</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$450 <del class="text-secondary-light">$500</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="img/headphone-2.jpg" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone Y902</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$550 <del class="text-secondary-light">$600</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="{{ asset('qbadminui/img/headphone-3.jpg') }}" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone E09</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$250 <del class="text-secondary-light">$300</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                        <!-- Top selling product list -->
                                        <div class="top-selling-product mt-4 d-flex flex-column flex-xl-row justify-content-between">
                                            <div class="d-flex flex-row">
                                                <!-- Product thumbnail -->
                                                <div class="product-thumbnail w-15">
                                                    <img src="{{ asset('qbadminui/img/headphone-4.jpg') }}" alt="product" class="w-100 h-75">
                                                </div>
                                                <!-- Product info -->
                                                <div class="produst-info ml-4">
                                                    <h6 class="text-primary font-weight-normal">Wireless Headphone X89</h6>
                                                    <p class="mb-0 text-secondary-light">Lorem ipsum dolor sit amet consectetur.</p>
                                                    <p class="text-danger">$450 <del class="text-secondary-light">$500</del></p>
                                                </div>
                                            </div>
                                            <!-- Details Button -->
                                            <button class="btn w-50 btn-outline-primary rounded btn-sm align-self-center mb-4">View details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Col 12 -->
                            <div class="col-12">
                                <!-- User activity section -->
                                <div class="card border-0 rounded-lg">
                                    <!-- Card body -->
                                    <div class="card-body p-0">
                                        <!-- Card title -->
                                        <div class="card-title m-0 p-3 d-flex flex-row align-items-center justify-content-between">
                                            <span>User activity</span>
                                            <span class="badge badge-pill badge-warning font-weight-normal">Update daily</span>
                                        </div>
                                        <!-- Activity details -->
                                        <div class="d-flex flex-row justify-content-between border-bottom p-3">
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">pages / Visit</span>
                                                <h5 class="m-0 font-weight-normal">2065</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">New user</span>
                                                <h5 class="m-0 font-weight-normal">465</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">Last week</span>
                                                <h5 class="m-0 font-weight-normal">23456</h5>
                                            </div>
                                        </div>
                                        <!-- Activity details -->
                                        <div class="d-flex flex-row justify-content-between border-bottom p-3">
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">pages / Visit</span>
                                                <h5 class="m-0 font-weight-normal">2065</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">New user</span>
                                                <h5 class="m-0 font-weight-normal">465</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">Last week</span>
                                                <h5 class="m-0 font-weight-normal">23456</h5>
                                            </div>
                                        </div>
                                        <!-- Activity details -->
                                        <div class="d-flex flex-row justify-content-between border-bottom p-3">
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">pages / Visit</span>
                                                <h5 class="m-0 font-weight-normal">2065</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">New user</span>
                                                <h5 class="m-0 font-weight-normal">465</h5>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="small text-muted">Last week</span>
                                                <h5 class="m-0 font-weight-normal">23456</h5>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Col 12 -->
                    <div class="col-12 mt-4">
                        <!-- Card -->
                        <div class="card mb-4">
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- Card title -->
                                <div class="card-title m-0 p-3">Last 20 Day Leads</div>
                                <!-- Chart -->
                                <div id="echart3" style="height: 360px; -webkit-tap-highlight-color: transparent; user-select: none; position: relative;"></div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </main>
@endsection
