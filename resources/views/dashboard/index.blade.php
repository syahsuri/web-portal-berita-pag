@extends('dashboard.layouts.main')

@section('contents')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- eCommerce statistic -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="info">{{ $articleCount }}</h3>
                                            <h6>Jumlah Berita</h6>
                                        </div>
                                        <div>
                                            <i class="fa-duotone fa-newspaper info font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning"><i class="fa-thin fa-image"></i> {{ $imageCount }} <i
                                                    class="fa-thin fa-film"></i></i> {{ $videoCount }}</h3>
                                            <h3 class="warning"></h3>
                                            <h6>Photo / Video</h6>
                                        </div>
                                        <div>
                                            <i class="fa-solid fa-photo-film warning font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                            style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="success">{{ $authorCount }}</h3>
                                            <h6>Author</h6>
                                        </div>
                                        <div>
                                            <i class="icon-user-follow success font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="danger">99.89 %</h3>
                                            <h6>Laporan RHISOL</h6>
                                        </div>
                                        <div>
                                            <i class="fa-thin fa-file-chart-column danger font-large-2 float-right"></i>
                                        </div>
                                    </div>
                                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%"
                                            aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ eCommerce statistic -->

                <!-- Recent Transactions -->
                <div class="row">
                    <div id="recent-transactions" class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Recent Transactions</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right"
                                                href="invoice-summary.html" target="_blank">Invoice Summary</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-top-0">No</th>
                                                <th class="border-top-0">Divisi</th>
                                                <th class="border-top-0">Customer Name</th>
                                                <th class="border-top-0">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-truncate"><i
                                                        class="la la-dot-circle-o success font-medium-1 mr-1"></i> Paid
                                                </td>
                                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                                <td class="text-truncate">
                                                    <span class="avatar avatar-xs">
                                                        <img class="box-shadow-2"
                                                            src="../../../app-assets/images/portrait/small/avatar-s-4.png"
                                                            alt="avatar">
                                                    </span>
                                                    <span>Elizabeth W.</span>
                                                </td>
                                                <td class="text-truncate">$ 1200.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Recent Transactions -->

                <!--Recent Orders & Monthly Sales -->
                <div class="rowt">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content ">
                                <div id="cost-revenue" class="height-250 position-relative"></div>
                            </div>
                            <div class="card-footer">
                                <div class="row mt-1">
                                    <div class="col-3 text-center">
                                        <h6 class="text-muted">Total Products</h6>
                                        <h2 class="block font-weight-normal">18.6 k</h2>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-info" role="progressbar"
                                                style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <h6 class="text-muted">Total Sales</h6>
                                        <h2 class="block font-weight-normal">64.54 M</h2>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-warning" role="progressbar"
                                                style="width: 60%" aria-valuenow="60" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <h6 class="text-muted">Total Cost</h6>
                                        <h2 class="block font-weight-normal">24.38 B</h2>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-danger" role="progressbar"
                                                style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 text-center">
                                        <h6 class="text-muted">Total Revenue</h6>
                                        <h2 class="block font-weight-normal">36.72 M</h2>
                                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                                            <div class="progress-bar bg-gradient-x-success" role="progressbar"
                                                style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Recent Orders & Monthly Sales -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
