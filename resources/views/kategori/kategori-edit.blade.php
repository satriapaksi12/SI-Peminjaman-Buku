@extends('layouts.app2')

@section('title', 'Edit Kategori Buku')
@section('fitur', 'EDIT KATEGORI BUKU')


@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form action="/kategori/{{ $kategori->id }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Kategori Buku</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                                            value="{{ $kategori->nama_kategori }}"  placeholder="">
                                        </div>
                                        <div class="col-sm-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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


