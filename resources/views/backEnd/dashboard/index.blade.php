@extends('backEnd.layouts.main')
@section('title', 'Dashboard Dinar')
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
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List Data Mahasiswa</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>NPM</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Dinar</td>
                        <td>Karyawan 2021</td>
                        <td>21552011188</td>
                      </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
