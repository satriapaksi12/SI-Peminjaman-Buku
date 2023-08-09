@extends('layouts.app2')
@section('title', 'Profile  User')
@section('fitur', 'PROFILE USER')
@section('content')
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="my-3 mb-3 d-flex justify-content-center">
                                            <div class="profile-photo-box">
                                                <img src="{{ asset('storage/' . $profile->nama_foto) }}" alt="Foto Profil" class="profile-photo">
                                            </div>
                                        </div>
                                        <style>
                                            .profile-photo-box {
                                                width: 150px; /* Sesuaikan ukuran kotak sesuai kebutuhan */
                                                height: 150px; /* Sesuaikan ukuran kotak sesuai kebutuhan */
                                                border: 1px solid #ccc; /* Tambahkan garis pinggir pada kotak jika diinginkan */
                                                display: flex;
                                                align-items: center;
                                                justify-content: center;
                                                overflow: hidden;
                                            }

                                            .profile-photo {
                                                width: 100%;
                                                height: auto;
                                            }
                                        </style>



                                        <div class="col-md-4">
                                            <label>Nama</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset disabled>
                                            <input type="text" name="nama"id="nama"
                                                class="form-control" value="{{ $profile->nama }}" placeholder="" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Nomor Induk</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset disabled>
                                            <input type="text"name="nomor_induk"id="nomor_induk"
                                                class="form-control" value="{{ $profile->nomor_induk }}" placeholder="" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset disabled>
                                            <input type="email" name="email"id="email"
                                                class="form-control" value="{{ $profile->email }}" placeholder="" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Role</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset disabled>
                                            <input type="text" name="role_id"id="role_id"
                                                class="form-control" value="{{ $profile->role->nama_role }}" placeholder="" readonly>
                                            </fieldset>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Status</label>
                                        </div>
                                        <div class="col-md-8 form-group">
                                            <fieldset disabled>
                                                @if ($profile->email_verified_at != null)
                                                <input type="text" name=""id=""
                                                class="form-control" value="Aktif" placeholder="" readonly>
                                                @else
                                                <input type="text" name=""id=""
                                                class="form-control" value="Tidak Aktif" placeholder="" readonly>
                                                @endif

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

