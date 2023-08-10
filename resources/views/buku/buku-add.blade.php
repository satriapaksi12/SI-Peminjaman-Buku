@extends('layouts.app2')

@section('title', 'Tambah Buku')
@section('fitur', 'TAMBAH BUKU')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="buku" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Kode Buku</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" name="nama"id="nama"
                                                class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Judul Buku</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text"name="nomor_induk"id="nomor_induk"
                                                class="form-control" placeholder="Nomor Induk">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penulis</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text"name="nomor_induk"id="nomor_induk"
                                                class="form-control" placeholder="Nomor Induk">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Penerbit</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text"name="nomor_induk"id="nomor_induk"
                                                class="form-control" placeholder="Nomor Induk">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Tahun Terbit</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="number"name="nomor_induk"id="nomor_induk"
                                            class="form-control" placeholder="Nomor Induk">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kategori Buku</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <div class="form-check">
                                                @foreach ($kategori as $data )
                                                    <input class="form-check-input" type="checkbox" value="{{ $data->id }}" name="category_id[]" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                    {{ $data->nama_kategori }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Deskripsi Buku</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text"name="nomor_induk"id="nomor_induk"
                                            class="form-control" placeholder="Nomor Induk">
                                        </div>

                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

