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
            
            <div class="row">
                <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4 mt-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <form action="{{ route('souvenir.input.saver') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Prioritas</label>
                                    <select name="prioritas" id="" class="form-control">
                                        <option value="1">rendah</option>
                                        <option value="2">sedang</option>
                                        <option value="3">utama</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success" type="submit">Simpan</button>
                                </div>
                            </form>
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
    </script>
    @endsection

    @section('styles')
    <link rel="stylesheet" href="{{ asset('public') }}/datatable/datatables.min.css">
    @endsection
</x-app-layout>

