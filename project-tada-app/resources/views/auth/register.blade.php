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
                <form class="mt-5">
                    
                    <!-- Name input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="name" id="registerName" class="form-control" />
                    <label class="form-label" for="registerName">Name</label>
                    </div>

                    <!-- Username input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" name="username" id="registerUsername" class="form-control" />
                    <label class="form-label" for="registerUsername">Username</label>
                    </div>

                    <!-- Email input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" name="email" id="registerEmail" class="form-control" />
                    <label class="form-label" for="registerEmail">Email</label>
                    </div>

                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" name="password" id="registerPassword" class="form-control" />
                    <label class="form-label" for="registerPassword">Password</label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-3">Sign in</button>
                </form>
            </div>
        </div>
    </div>
@endsection