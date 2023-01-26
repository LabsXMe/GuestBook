<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Dashboard</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <!-- <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Money</p>
                            <h5 class="font-weight-bolder mb-0">
                            $53,000
                            <span class="text-success text-sm font-weight-bolder">+55%</span>
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Today's Users</p>
                            <h5 class="font-weight-bolder mb-0">
                            2,300
                            <span class="text-success text-sm font-weight-bolder">+3%</span>
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">New Clients</p>
                            <h5 class="font-weight-bolder mb-0">
                            +3,462
                            <span class="text-danger text-sm font-weight-bolder">-2%</span>
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Sales</p>
                            <h5 class="font-weight-bolder mb-0">
                            $103,430
                            <span class="text-success text-sm font-weight-bolder">+5%</span>
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4 mt-4">
                    <div class="card">
                        <div class="card-body p-3 table-responsive">
                            <table class="table table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Roni Ahmadi</td>
                                        <td>Kediri</td>
                                        <td>
                                            <span class="badge bg-danger">Priority</span>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-sm btn-success">Selesai</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Roni Ahmadi</td>
                                        <td>Kediri</td>
                                        <td>Priority</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </main>
    @section('script')
    <script src="{{ asset('public') }}/datatable/jQuery-3.6.0/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('public') }}/datatable/datatables.min.js"></script>
    <script>
        $('#example').DataTable({
            processing: true,
            ajax: {
                url:'{{ route("souvenir.datatable") }}',
            },
            columns: [
                { data: 'DT_RowIndex' },
                { data: 'nama' },
                { data: 'alamat' },
                { data: function(row){
                    let datas = 'rendah'
                    if (row.prioritas == 3){
                        datas = 'tinggi'
                    }else if(row.prioritas == 2){
                        datas = 'sedang'
                    }
                    return datas;
                } },
                { searchable: false, orderable:false, data:function(a,b,c){
                    console.log(a,b,c)
                    return "coba"
                } },
            ],
        });
    </script>
    @endsection

    @section('styles')
    <link rel="stylesheet" href="{{ asset('public') }}/datatable/datatables.min.css">
    @endsection
</x-app-layout>

