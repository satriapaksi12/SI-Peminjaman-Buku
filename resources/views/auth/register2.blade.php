@extends('layouts.auth2')

@section('title', 'PERPUSTAKAAN DIGITAl | Register')

@section('content')
    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">
            <div class="signup-content">
                @if (Session::has('status'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form method="POST" action="register" class="register-form" enctype="multipart/form-data">
                    @csrf
                    <h2 class="form-title"> <span style="color: black;">PERPUSTAKAAN</span>
                        <span style="color: orange;">DIGITAL</span>
                    </h2>
                    <h1 class="text-center justify-content-center">Register</h1>
                    <div class="form-group">
                        <label for="foto" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-input" name="nama" id="nama" placeholder="Nama" required/>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Nomor Induk</label>
                        <input type="text" class="form-input" name="nomor_induk" id="nomor_induk"
                            placeholder="Nomor Induk" required/>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Email</label>
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Password</label>
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required />
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <label for="foto" class="form-label">Foto Profil</label>
                        <input type="file" class="form-input" name="foto" id="foto" accept="image/*" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Register" />
                    </div>
                </form>
                <p class="loginhere">
                    Sudah memiliki akun ?<a href="/login" class="loginhere-link">Masuk Akun</a>
                </p>
            </div>
        </div>
    </section>

@endsection
