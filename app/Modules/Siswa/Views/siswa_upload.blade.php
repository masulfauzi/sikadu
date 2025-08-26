@extends('layouts.app')

@section('main')

    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">{{ $title }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Form Upload {{ $title }}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Import Data {{ $title }}</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="header-title">Form Import Data {{ $title }}</h4>
                             <div class="row">
                                <div class="col-3">
                                </div>
                                <div class="col-7">
                                </div>
                                <div class="col-2">
                                    <a href="#" class="btn btn-primary">Panduan Format File</a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('siswa.import.excel') }}" method="POST" enctype="multipart/form-data">
                                <div class="form-body">
                                    @csrf 
                                    <label>Pilih File Excel : </label>
                                    <input type="file" name="file" required>
                                    <div class="offset-md-3 ps-2">
                                        <button class="btn btn-primary" type="submit" name="submit">Simpan</button> &nbsp;
                                        <a href="{{ route('siswa.index') }}" class="btn btn-secondary">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!--- end row -->
        </div> <!-- container -->

    </div> <!-- content -->

@endsection