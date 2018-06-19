@extends('layouts.main')

@section('body')
<div class="container">
  {!! Form::open(['url' => 'foo/bar','method','post']) !!}
  <h2 class = "page-header">Add Phone</h2>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('phonepicture'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('model'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('technology'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('announced'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('status'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('dimensions'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('weight'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('sim'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('displayType'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('displaySize'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('displayResolution'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('multitouch'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('os'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('chipset'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('cpu'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('gpu'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('dimensions'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('weight'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('sim'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('displayType'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('displaySize'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('displayResolution'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('multitouch'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('os'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('chipset'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('cpu'); ||}
    </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
         {|| Form::text('gpu'); ||}
    </div>
        <button type="submit" class="btn btn-default">Submit</button>
  {!! Form::close() !!}
</div>





@endsection
