@extends('layouts.layout')
@section('content')
    <div class="card mb-3 col-lg-7 mx-auto mt-5 shadow" style="height: 35rem; background: #F5F5F5">
        <div class="card-title container row py-3">
            <div class="col-lg-4 mb-3">
                <a href="/"><img src="img/logo.png" class="img-fluid" width="50px" alt=""></a>
            </div>
            <div class="col-lg-8 text-end my-auto fw-semibold">
                <p class=" fw-semibold">Sudah mempunyai akun?<a href="{{ route('login') }}"
                        class="mx-1 text-decoration-none">Masuk</a></p>
            </div>
            <div class="col-lg-10 mx-auto">
                <div class="card-body ">
                    <div class="card-text">
                        <h4 class="text-center fw-bold ">DAFTAR AKUN</h4>
                        <div class="mt-3 ms-5">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class=" col-lg-12 mx-auto ms-5">
                                        <div class="col-lg-8 ms-3">
                                            <label for="username" class="form-text">Nama Pengguna</label>
                                            <input type="text" name="name" id="name"
                                                class="form-control border-dark" :value="old('name')"
                                                placeholder="Masukan Nama Pengguna" required>
                                        </div>
                                        <div class="col-lg-8 ms-3">
                                            <label for="email" class="form-text">Masukan Email Pengguna</label>
                                            <input type="email" name="email" id="email"
                                                class="form-control border-dark" :value="old('email')"
                                                placeholder="Masukan Email Aktif" required>
                                        </div>
                                        <div class="col-lg-8 ms-3">
                                            <label for="password" class="form-text">Masukan Kata Sandi</label>
                                            <input type="password" name="password" id="password"
                                                class="form-control border-dark" placeholder="Masukan Kata Sandi" required>
                                        </div>
                                        <div class="col-lg-8 ms-3">
                                            <label for="password_confirmation" class="form-text">Ulang Kata Sandi</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation"
                                                class="form-control border-dark" placeholder="Ulang Kata Sandi" required>
                                        </div>
                                    </div>
                                    <div class="ms-3 mt-3">
                                        {{-- @foreach ($roles as $role)
                                            @if ($role->id == 2)
                                                <input type="checkbox" name="role[]" class="btn"
                                                    id="check-{{ $role->id }}" value="{{ $role->name }}" required>
                                                <label for="check-{{ $role->id }}"
                                                    class="form-text">{{ __('SAYA TELAH MENYETUJUI SEMUA HAL!!!') }}</label>
                                            @endif
                                        @endforeach --}}
                                    </div>
                                    <div class="text-center">
                                        <button value="submit" name="submit"
                                            class="col-lg-5 mx-auto btn btn-dark mt-5 me-5">{{ __('Buat Akun') }}</button>
                                    </div>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
