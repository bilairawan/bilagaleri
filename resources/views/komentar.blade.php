@extends('layouts/app')
@section('content')
<link rel="stylesheet" href="css/style.css" />
<div class="form-container">
    <form class="form">
      <div class="form-group">
        <label for="email">Company Email</label>
        <input type="text" id="email" name="email" required="">
      </div>
      <div class="form-group">
        <label for="textarea">How Can We Help You?</label>
        <textarea name="textarea" id="textarea" rows="10" cols="50" required="">          </textarea>
      </div>
      <button class="form-submit-btn" type="submit">Submit</button>
    </form>
  </div>
@endsection