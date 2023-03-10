@extends('layouts.master')
@section('content')
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pembayaran</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pembayaran.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <br>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nis</strong>
                    <select name="siswa_id" id="" class="form-control">
                         <option selected>Pilih Nis</option>
                      @foreach ($siswa as $row)
                    <option {{ $row->id == old('siswa_id') ? 'selected' : '' }} value="{{ $row->id }}"> {{ $row->nis}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nisn</strong>
                    <select name="siswa_id" id="" class="form-control">
                         <option selected>Pilih Nisn</option>
                      @foreach ($siswa as $row)
                    <option {{ $row->id == old('siswa_id') ? 'selected' : '' }} value="{{ $row->id }}"> {{ $row->nisn}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
               <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="form-group">
                    <strong>Nama Siswa</strong>
                    <select name="tunggakan" id="" class="form-control">
                         <option selected>Pilih Nama Siswa</option>
                      @foreach ($tunggakans as $row)
                    <option {{ $row->id == old('tunggakan') ? 'selected' : '' }} value="{{ $row->id }}"> {{ $row->siswa->nama }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bulan Dibayar</strong>
                    <input type="number" name="bulan_dibayar" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Bayar</strong>
                    <input type="string" name="jumlah_bayar" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
