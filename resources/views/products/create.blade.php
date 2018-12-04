@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">

                	@if ($errors->any())
                	<div class="alert alert-danger">
                		
                		<ul>
                			@foreach($errors->all() as $error)
                				<li>
                					{{ $error }}
                				</li>
                			@endforeach

                		</ul>
                	</div>
                	@endif
                   
                  <form class="form" method="POST" action="{{ route('products.store')}}">

                  	{{ csrf_field() }}

                  	{{method_field('POST')}}
                              

                  	<div class="form-group">
                  		<label>Nome</label>
                  		<input type="Nome" name="name" class="form-control" />
                  	</div>
					
                    <div class="form-group">
                      <label class= "">Categoria</label>
                      <select class = "form-control" name="id_category">
                        @foreach($categories as $category)
                        <option value = "{{$category->id}}">
                          {{$category->name}}
                        </option>
                        @endforeach
                        
                      </select>

                      
                    </div>

					<div class="form-group">
                  		<label >Valor</label>
                  		<input type="number" name="value" class="form-control" />
                  	</div>      
                  	   
                  	<div class="form-group">
                  		<label >Obs</label>
                  		<textarea class="form-control" name="obs"></textarea>
                  	</div> 

                  	<input type="submit" value="salvar" Class="btn btn-primary">     

                </div> 
            </div>
        </div>
            </div>
</div>
@endsection

