
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produtos</div>

                <table>
                	<tr>
                		<th>id</th>
                		<th>name</th>
                		<th>value</th>
                		<th>obs</th>
                	</tr>
                	  	@foreach ($products as $product)

                		<tr>
	                		
                 			<td>{{ $product->id }}</td>
               				<td>{{ $product->name }}</td>
               				<td>{{ $product->value }}</td>
               				<td>{{ $product->obs }}</td>
              			
                		</tr>
                	@endforeach

                </table>

                {{ $products->links()}}

               <div class="card-body">
           

                </div> 
            </div>
        </div>
            </div>
</div>
@endsection
