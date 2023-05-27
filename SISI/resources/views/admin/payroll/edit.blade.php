@extends('layouts.admin')
@section('header', 'Payroll')

@section('content')
<div class="row">   
    	<div class="col-md-6">
        	<div class="card card-primary">
        		<div class="card-header">
            		<h3 class="card-title">Edit</h3>
        		</div>
        
        		<form action="{{ url('payrolls/'.$payroll->id) }}" method="post">
        			@csrf
                    {{ method_field('PUT') }}
                    
            		<div class="card-body">
                  		<div class="form-group">
                          <label>Bpjs</label>
                    		<input type="text" name="bpjs" class="form-control" placeholder="Enter bpjs" required="" value="{{ $payroll->bpjs }}">
                            <label>Salary</label>
                    		<input type="text" name="salary" class="form-control" placeholder="Enter salary" required="" value="{{ $payroll->salary }}"> 
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