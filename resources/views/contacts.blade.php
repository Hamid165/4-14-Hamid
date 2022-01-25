@extends('layouts.main')
@section('container')
<div class="tittle-top mb-5">
    <h2 class="fw-bold">Contacts Us</h2>
</div>
<form>
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="inputname" placeholder="Nama">
      <label for="inputname" class="form-label">Nama</label>
    </div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="inputemail" placeholder="Email">
      <label for="password" class="form-label">Email</label>
    </div>
    <div class="form-floating mb-3">
        <textarea name="inputpesan" placeholder="Tinggalkan pesan disini" class="form-control" id="floatingTextarea2" style="height: 100px"></textarea>
      
      <label class="floatingTextarea2">Pesan</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    
@endsection