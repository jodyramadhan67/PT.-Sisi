@extends('layouts.admin')
@section('header', 'Payroll')

@section('content')
<div class="row">   
    	<div class="col-md-6">
        	<div class="card card-primary">
        		<div class="card-header">
            		<h3 class="card-title">Add New</h3>
        		</div>
        
        		<form action="{{ url('payrolls') }}" method="post">
        			@csrf
            		<div class="card-body">
                  		<div class="form-group">
                    		<label>Bpjs</label>
                            <input type="text" name="bpjs" class="form-control" placeholder="Enter bpjs" required="">
                            <label>Salary</label>
                            <input type="text" name="salary" class="form-control" placeholder="Enter salary" required="">           
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