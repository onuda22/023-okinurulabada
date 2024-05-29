@extends('index')
@section('content')

    <div class="container p-5 d-flex justify-content-center flex-row align-items-center">
        <!-- Pills navs -->
        <div class="col-lg-4">
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                <a class="nav-link" id="tab-login" data-mdb-pill-init href="{{ route('login') }}" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                <a class="nav-link active" id="tab-register" data-mdb-pill-init href="{{ route('register') }}" role="tab"
                    aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
        <!-- Pills navs -->
            <div class="tab-pane fade show active" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                <form class="mt-5" method="POST" action="{{ route('registerCreate') }}">
                    @csrf
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="name" id="registerName" class="form-control" />
                    <label class="form-label" for="registerName">Nama</label>
                    </div>

                    <!-- Phone Number input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="phone" id="registerPhoneNumber" class="form-control" />
                    <label class="form-label" for="registerPhoneNumber">Nomor Hp</label>
                    </div>
                    
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input type="password" name="password" id="registerPassword" class="form-control" />
                        <label class="form-label" for="registerPassword">Password</label>
                    </div>
                    
                    <!-- Role Input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                        <select name="role" id="registerRole" class="form-select">
                            <option value="petani">Petani</option>
                            <option value="pedagang">Pedagang</option>
                        </select>
                        <label class="form-label" for="registerRole">Role</label>
                    </div>

                    <!-- Address inputs -->
                    <div class="mb-4">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="kampung" id="registerKampung" class="form-control mb-2" placeholder="Kampung">
                        <input type="text" name="rt" id="registerRT" class="form-control mb-2" placeholder="RT">
                        <input type="text" name="rw" id="registerRW" class="form-control mb-2" placeholder="RW">
                        <input type="text" name="desakel" id="registerDesaKel" class="form-control mb-2" placeholder="Desa/Kelurahan">
                        <input type="text" name="kecamatan" id="registerKecamatan" class="form-control mb-2" placeholder="Kecamatan">
                        <input type="text" name="kabkota" id="registerKabKota" class="form-control mb-2" placeholder="Kabupaten/Kota">
                        <input type="text" name="provinsi" id="registerProvinsi" class="form-control" placeholder="Provinsi">
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Daftar</button>
                </form>
            </div>
        </div>
    </div>
@endsection