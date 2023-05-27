@extends('layouts.admin')
@section('header', 'Officer')

@section('content')
<div class="row">   
    	<div class="col-md-6">
        	<div class="card card-primary">
        		<div class="card-header">
            		<h3 class="card-title">Add New Officer</h3>
        		</div>
        
        		<form action="{{ url('officers') }}" method="post">
        			@csrf
            		<div class="card-body">
                  		<div class="form-group">
                    		<label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name" required="">
                            <label>Tittle</label>
                            <input type="text" name="tittle" class="form-control" placeholder="Enter tittle" required="">
                            <label>Year</label>
                            <input type="text" name="year" class="form-control" placeholder="Enter year" required="">
                            <label>Annual leave</label>
                            <input type="text" name="annual_leave" class="form-control" placeholder="Enter annual_leave" required="">                
                  		</div>
            		</div>
       
            		<div class="card-footer">
                		<button type="submit" class="btn btn-primary">Submit</button>
            	</div>
        	</form>
    	</div>
	</div>
</div>
@endsection