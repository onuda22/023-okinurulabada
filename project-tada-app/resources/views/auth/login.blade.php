@extends('index')
@section('content')
    
<div class="container p-5 d-flex justify-content-center flex-row align-items-center">
    <!-- Pills navs -->
    <div class="col-lg-4">
        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-login" data-mdb-pill-init href="{{ route('login') }}" role="tab"
                aria-controls="pills-login" aria-selected="true">Login</a>
            </li>
            <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-register" data-mdb-pill-init href="{{ route('register') }}" role="tab"
                aria-controls="pills-register" aria-selected="false">Register</a>
            </li>
        </ul>
    <!-- Pills navs -->
  
  <!-- Pills content -->
        <div class="tab-content">
            {{-- Munculin Error --}}
            @if (session()->get('error'))
                <p style="color: red">{{ session()->get('error') }}</p>
            @endif
            {{-- Munculin Error --}}

            <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form method="POST" action="{{ route('loginAuth') }}" enctype="multipart/form-data">
                @csrf
                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="phone" id="loginPhone" class="form-control" />
                <label class="form-label" for="loginPhone">Phone Number</label>
                @error('phone')
                    {{ $message }}
                @enderror
                </div>
        
                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" name="password" id="loginPassword" class="form-control" />
                <label class="form-label" for="loginPassword">Password</label>
                </div>
        
                {{-- <!-- 2 column grid layout -->
                <div class="row mb-4">
                <div class="col-md-6 d-flex justify-content-center">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
                </div> --}}
        
                <!-- Submit button -->
                <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>
        
                <!-- Register buttons -->
                <div class="text-center">
                <p>Not a member? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
            </div>
            
        </div>
  </div>
  <!-- Pills content -->
</div>

@endsection