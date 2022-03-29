@extends('nav.app')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                      
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Kasus
                                    {{$hitungkasus}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Korban {{$hitungkorban}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @include('nav.footer')
            </div>
        </div>
@endsection

