@extends("layout")

@section("content")

<div class="container-fluid">
<div  class="row">
<div class="col-12 col-md-8">
@foreach($pposts as $ppost)
<div class="card mb-3" mt-4>

  <img class="card-img-top" src="http://placehold.it/600x300" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$ppost->p_title}}</h5>
    <p class="card-text"> {{$ppost->p_content}} </p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
@endforeach
</div>
<div class="col-12 col-md-4">
<div class="card">
  <h5 class="card-header">card title</h5>
  <div class="card-body">
    card body
  </div>
</div>
</div>
</div>
</div>

@endsection
