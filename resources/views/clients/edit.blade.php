
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">clientes</div>

                <div class="card-body">
                   
                  <form class="form" method="POST" action="{{ route('clients.store')}}">

                  	{{ csrf_field() }}

                  	{{method_field('PUT')}}
                              

                  	<div class="form-group">
                  		<label>Nome</label>
                  		<input type="text" name="name" class="form-control" 
                  		value-"{{$client->name}}"/>
                  	</div>
					
					<div class="form-group">
                  		<label >email</label>
                  		<input type="email" name="email" class="form-control"
                  		value-"{{$client->email}}"/>
                  	</div>      
                  	<div class="form-group">
                  		<label >ano</label>
                  		<input type="year" name="year" class="form-control" 
                  		value-"{{$client->year}}"/>
                  	</div>     
                  	<div class="form-group">
                  		<label >Obs</label>
                  		<textarea class="form-control" name="obs">
                  		{{$client->year}}"
                  		</textarea>
                  	</div> 

                  	<input type="submit" value="salvar" Class="btn btn-primary">     

                </div> 
            </div>
        </div>
            </div>
</div>
@endsection


