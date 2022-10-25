@extends('layouts.simple.master')
@section('title', 'Edit Satuan Produk')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>Edit Data - {{$user->name}}</h3>
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        Konfigurasi
    </li>
    <li class="breadcrumb-item"><a href="{{route('user.index')}}">Daftar User</a></li>
    <li class="breadcrumb-item">Edit User - {{$user->name}}</li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('user.update',$user->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-12">
                                    <label class="form-label" for="exampleFormControlInput1">Name</label>
                                    <input class="form-control form-control-lg" id="exampleFormControlInput1 "
                                           autofocus="true" name="name"
                                           placeholder="Masukan Nama" value="{{$user->name}}">
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="Alamat">Email</label>
                                    <input class="form-control form-control-lg" id="Email "
                                           autofocus="true" name="Email"
                                           placeholder="Masukan Email" value="{{$user->email}}">
                                </div>
                                <div class="col-3">
                                    <label class="form-label" for="telfon">Password</label>
                                    <input class="form-control form-control-lg" id="telfon"
                                           autofocus="true" name="telfon"
                                           placeholder="Masukan Password" value="{{$user->password}}">
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg mt-4" type="submit" >Simpan Data</button>
                            <a href="{{ route('user.index') }}" class="btn btn-outline-secondary btn-lg mt-4" >Kembali</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
