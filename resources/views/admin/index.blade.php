@extends('admin.admin_master')
@section('admin')
<div class="main-content-inner">
            <div class="row mb-4">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex align-items-center dashboard-header flex-wrap mb-3 mb-sm-0">
                            <h5 class="mr-4 mb-0 font-weight-bold">Dashboard</h5>
                            <div class="d-flex align-items-baseline dashboard-breadcrumb">
                                <p class="text-muted mb-0 mr-1 hover-cursor">App</p>
                                <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                <p class="text-muted mb-0 mr-1 hover-cursor">Dashboard</p>
                                <i class="mdi mdi-chevron-right mr-1 text-muted"></i>
                                <p class="text-muted mb-0 hover-cursor">Analytics</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-group mr-3">
                                <button type="button" class="btn btn-primary">02 Aug 2021</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                                    <a class="dropdown-item" href="#">Sept 2021</a>
                                    <a class="dropdown-item" href="#">Oct 2021</a>
                                    <a class="dropdown-item" href="#">Nov 2021</a>
                                </div>
                            </div>
                            <button class="btn bg-white border d-none d-sm-block">Download Report</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card primary_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Total News</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">5,009</h3>
                                <div class="arrow_icon"><i class="ion-person-stalker text-primary"></i></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card success_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Total User</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">94,356</h3>
                                <div class="arrow_icon"><i class="ion-arrow-down-c text-success"></i></div>
                            </div>
                            <p class="mb-0 text-white">1.92% <span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card warning_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Total Reporter</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">1,253</h3>
                                <div class="arrow_icon"><i class="ion-arrow-up-c text-warning"></i></div>
                            </div>
                            <p class="mb-0 text-white">1.27% <span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card info_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Total Guest</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">5,224</h3>
                                <div class="arrow_icon"><i class="ion-arrow-up-c text-info"></i></div>
                            </div>
                            <p class="mb-0 text-white">9.12% <span class="text-white ml-1"><small>(Since last day)</small></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card primary_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Pendding News</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">5,009</h3>
                                <div class="arrow_icon"><i class="ion-person-stalker text-primary"></i></div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card success_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Unapproved News</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">94,356</h3>
                                <div class="arrow_icon"><i class="ion-arrow-down-c text-success"></i></div>
                            </div>
                            <p class="mb-0 text-white">1.92% <span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card warning_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Total Reporter</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">1,253</h3>
                                <div class="arrow_icon"><i class="ion-arrow-up-c text-warning"></i></div>
                            </div>
                            <p class="mb-0 text-white">1.27% <span class="text-white ml-1"><small>(Since last month)</small></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-12 stretched_card">
                    <div class="card mb-mob-4 icon_card info_card_bg">
                        <!-- Card body -->
                        <div class="card-body">
                            <p class="card-title mb-0 text-white">Total Guest</p>
                            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <h3 class="mb-0 text-white">5,224</h3>
                                <div class="arrow_icon"><i class="ion-arrow-up-c text-info"></i></div>
                            </div>
                            <p class="mb-0 text-white">9.12% <span class="text-white ml-1"><small>(Since last day)</small></span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        @endsection