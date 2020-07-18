@extends("layout")

@section("content")

<form action="{{url('/insertpost')}}" method="POST">
	@csrf
  <div class="form-group row">
  	<input type="hidden" name="userid" value="Auth::user()->id" >
    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm" >title </label>
    <div class="col-sm-10">
      <input type="text" class="form-control form-control-sm" name="title" id="colFormLabelSm" placeholder="col-form-label-sm">
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">content </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="colFormLabel"name="content" placeholder="col-form-label" >
    </div>
  </div>
  <div class="form-group row">
    <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">category</label>
    <div class="col-sm-10">
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="catid">
        <option value ="">Choose...</option>
        @foreach($categories as $category)
         <option value=" {{ $category->cat_id}}"  > {{$category->cat_name}}</option>
         @endforeach
      </select>
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
<div class="col-12">
	@<?php foreach ($errors -> all() as $error): ?>
		 <div class="alert alert-danger mt-4">
		 	{{$error}}
		 </div>
	<?php endforeach ?>
	</div>
@endsection
