@extends('layouts.layout')
@include('layouts.navbar')
@section('content')
    <div class="col-lg-12 py-4" style="background-color: #000000;">
        <div class="col-lg-10 mx-auto row">
            <div class="col-lg-5 align-self-center mx-auto">
                <h1 class="fw-bold" style="color: #FFFFFF;">IT-CONSULTANT</h1>
                <p class="mt-5 ms-3"style="color: #FFFFFF;">Tanyakan Keluhan Anda Kepada Kami</p>
            </div>
            <div class="col-lg-5 float-end ">
                <img src="img/landingpage.svg" class="img-fluid" width="400" alt="">
            </div>
        </div>
    </div>
    <form action="" method="post">
        @csrf
        <div class="card mt-5 mb-5 mx-auto shadow" style="width: 45rem; height: 37rem; background: #F5F5F5">
            <div class="card-body">
                <h4 class="card-title text-center mt-5 fw-bold">TANYAKAN DISINI !!!</h4>
                <div class="form-floating mt-5">
                    <textarea class="form-control border-dark" style="height: 200px;" placeholder="Leave a comment here"
                        id="floatingTextarea" name="isi" required></textarea>
                    <label for="floatingTextarea">Masukan Keluhan Anda</label>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3">
                        <input type="file" name="lampiran" id="lampiran" class="form-control mt-3 border-dark"
                            required>
                    </div>
                </div>
                <div class="col-lg-4 mt-5  mx-auto">
                    <button type="submit" class="btn btn-dark col-lg-12" id="liveAlertBtn">Kirim</button>
                </div>
            </div>
        </div>
    </form>
@include('layouts.footer')
@endsection
