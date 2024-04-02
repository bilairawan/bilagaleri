<!-- Awal Login -->
<link rel="stylesheet" href="css/style.css" />
<div class="row">
</div>
<form action="/login" class="form_main" method="post">
    @csrf

    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginEror')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p class="heading">Masuk</p>
    <div class="inputContainer">
        <input type="email" name="email" class="inputfield-on @error('username') is-invalid @enderror" required value="{{old('username')}}" id="email" placeholder="name@example.com" autofocus>
        @error('email')
        <div class="invalid-feedback">
            {{ $message }}
            Please choose a username.
          </div>
          @enderror
    </div>
    
<div class="inputContainer">
    <svg viewBox="0 0 16 16" fill="#777" height="16" width="16" xmlns="http://www.w3.org/2000/svg" class="inputIcon">
    <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
    </svg>
    <input type="password" name="password" class="inputfield-on" required id="password" placeholder="Password">
    @error('password')
        <div class="invalid-feedback">
            {{ $message }}
            Please choose a username.
          </div>
          @enderror
</div>
              
           
<button id="button"><a href="">Kirim</a></button>
    <div class="signupContainer">
        <p>Belum punya akun?</p>
        <a href="">Daftar</a>
    </div>
</form>
