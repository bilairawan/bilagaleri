@extends('layouts/app')
@section('content')
{{-- Awal slider --}}
<div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <center><img src="../img/nj.png" class="d-block w-95" style="border-radius:40px" alt="..."></center>
      </div>
      <div class="carousel-item">
        <center><img src="../img/bet.png" class="d-block w-95" style="border-radius:40px" alt=..."></center>
      </div>
      <div class="carousel-item">
        <center><img src="../img/bbu.png" class="d-block w-95" style="border-radius:40px" alt=..."></center>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon boder-radius:50px" style="background-color:rgb(250, 139, 139)" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" style="background-color:rgb(250, 139, 139)" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
{{-- Akhir slider --}}
{{-- Awal Kata --}}
<center><p class="par" style="margin-top:30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum perspiciatis esse aut, nostrum assumenda optio voluptatum blanditiis harum aspernatur error nobis dolor eum, laboriosam quis placeat similique, doloribus magnam impedit aliquid. Praesentium recusandae dicta, doloribus saepe voluptas esse eligendi a voluptate, repellat assumenda laudantium minus. Rem autem eveniet ex pariatur sed possimus ad praesentium similique quas expedita. Molestiae praesentium possimus ab. Eveniet reiciendis est exercitationem minus pariatur dolorem quaerat veniam.</p></center>
{{-- Akhir Kata --}}
<!-- Awal Beranda -->
<div class="boxs">
<div class="card2">
    <div class="imgbox">
        <div class="img"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>

<div class="card2">
    <div class="imgbox">
        <div class="img2"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>

<div class="card2">
    <div class="imgbox">
        <div class="img3"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>

<div class="card2">
    <div class="imgbox">
        <div class="img4"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>
</div>

<!-- Boxs2 -->
<div class="boxs2">
<div class="card2">
    <div class="imgbox">
        <div class="img"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>

<div class="card2">
    <div class="imgbox">
        <div class="img2"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>

<div class="card2">
    <div class="imgbox">
        <div class="img3"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>

<div class="card2">
    <div class="imgbox">
        <div class="img4"></div>
    </div>
    <div class="details">
        <h2 class="title">John Doe</h2>
        <span class="caption">Developer</span>
    </div>
</div>
</div>


 @endsection