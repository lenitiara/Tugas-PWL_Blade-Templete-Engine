@extends('layout.app')
@section('title','Halaman About')
@section('content')

<form>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault01">Nama depan</label>
        <input type="text" class="form-control" id="validationDefault01" value="masukkan nama depan" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationDefault02">Nama Belakang</label>
        <input type="text" class="form-control" id="validationDefault02" value="masukan nama belakang" required>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-6 mb-3">
        <label for="validationDefault03">Kota</label>
        <input type="text" class="form-control" id="validationDefault03" required>
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault04">State</label>
        <select class="custom-select" id="validationDefault04" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Modal</button>
    <x-modal>
        haii
    </x-modal>
  </form>
@endsection