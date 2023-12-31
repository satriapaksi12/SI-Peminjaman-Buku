@extends('layouts.app2')

@section('title', 'Tambah User')
@section('fitur', 'TAMBAH USER')

@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="user" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text" name="nama"id="nama"
                                                class="form-control" placeholder="Nama">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Induk</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="text"name="nomor_induk"id="nomor_induk"
                                                class="form-control" placeholder="Nomor Induk">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="email" name="email"id="email"
                                                class="form-control" placeholder="Email">
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <input type="password" name="password"id="password"
                                                class="form-control" placeholder="Password">
                                        </div>

                                        <div class="col-md-4">
                                            <label>Role</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset class="form-group">
                                                <select class="form-select" name="role_id" id="role_id">
                                                    @foreach ($role as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama_role }}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
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

