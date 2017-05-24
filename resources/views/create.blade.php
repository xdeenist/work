@extends('layouts.app')


    @section('content')
    <div class="container">
        {!! Form::open(['url' => 'foo/bar']) !!}
		<form>
  		<div class="form-group">
    		<label for="exampleInputEmail1">Name</label>
    		<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
    		<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  		<div class="form-group">
    		<label for="exampleSelect1">Example select</label>
    		<select class="form-control" id="exampleSelect1">
      		<option>1</option>
      		<option>2</option>
      		<option>3</option>
      		<option>4</option>
      		<option>5</option>
    		</select>
  		</div>
  		<div class="form-group">
    		<label for="exampleTextarea">Example textarea</label>
    		<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
		</form>		

		{!! Form::close() !!}
      
    </div><!-- /.container -->
    @endsection

