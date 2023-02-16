@extends('layouts.layout')
@section('content')

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Penawaran Card -->
            <div class="col-sm-6 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Penawaran</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-wallet2"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-muted small pt-2 ps-1">Total penawaran</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Penawaran Card -->

            <!-- Penggunars Card -->
            <div class="col-sm-6 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Pengguna</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>999</h6>
                      <span class="text-muted small pt-2 ps-1">Total Pengguna</span>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Pengguna Card -->

            <!-- Tertinggi Card -->
            <div class="col-sm-12 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Penawaran Tertinggi</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cash"></i>
                    </div>
                    <div class="ps-3">
                      <h6>Rp. <span class="harga">20000000</span></h6>
                      <span class="text-muted small pt-2 ps-1">Penawaran tertinggi</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Tertinggi Card -->

            <!-- Penawaran Terbaru -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="card-body pb-0">
                  <h5 class="card-title">Penawaran Terbaru</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Penawaran</th>
                        <th scope="col">Tanggal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a href="#" class="text-dark fw-bold">Septian Padli</a></td>
                        <td>Rp. <span class="harga">20000000</span></td>
                        <td class="">2022-02-13</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End columns -->

      </div>
    </section>

@endsection


