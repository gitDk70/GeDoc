@extends('layouts.app')

@section('content')

       

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cards</h1>
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                À faire</div>
                                            <div class="text-m mb-0 font-weight-bold text-gray-800">- Appeler client M.</div>
                                            <div class="text-m mb-0 font-weight-bold text-gray-800">- Envoyer facture à S.</div>
                                            <div class="text-m mb-0 font-weight-bold text-gray-800">- Mettre à jour application</div>
                                            <div class="text-m mb-0 font-weight-bold text-gray-800">- Achat produit P.</div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Pending Requests Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending Requests</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <div class="row">

                        <div class="col-lg-6">

                            <!-- Default Card Example -->
                            <!-- <div class="card mb-4">
                                <div class="card-header">
                                    Default Card Example
                                </div>
                                <div class="card-body">
                                    This card uses Bootstrap's default styling with no utility classes added. Global
                                    styles are the only things modifying the look and feel of this default card example.
                                </div>
                            </div> -->

                            <div class="container">
                                <div class="row">
                                <img class=""
                                    src="img/personal.png">
                                </div> 
                                </div> 

                            

                        </div>

                        <div class="col-lg-6">

                            <!-- Dropdown Card Example -->
                            
                            

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @endsection