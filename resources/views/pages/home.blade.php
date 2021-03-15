@extends('layout.app')
@section('title','Halaman Home')
@section('content')

<br>
<div class="jumbotron bg-secondary">
    <div style="font-family: comic;" class="text-center">
      <h1 class="display-4 text-light" style=" font-family: comic; font-weight: bold;"> Fashionable </h1>
      <h5 class="display-5" style="font-family: comic; font-weight: bold; margin: 0px;">blog page</h5>
    </div>
  </div>
<br><br>
    <div class="row">
        <div class="col-md-12">
            <main role="main">
                <div style="font-family: arial;" class="container">
                  <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Fashion</h5>
<p class="card-text">Bag</p>
                              <a href="#" class="btn btn-link">Kunjungi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Fashion</h5>
                              <p class="card-text">Shoes</p>
                              <a href="#" class="btn btn-link">kunjungi...</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h5 style="font-weight: bold;" class="card-title">Fashion</h5>
                              <p class="card-text">Accessories</p>
                              <a href="#" class="btn btn-link">kunjungi...</a>
                            </div>
                          </div>
                    </div>
                   
                  </div>
                  <hr>
                </div>
              </main>

@endsection

@section('js')
  <script>
    console.log('Hello');
  </script>
@endsection