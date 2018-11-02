
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">clientes</div>

                <div class="card-body">
                  
                  <div class="col-md-12 text-right">
                
                    <a href="{{route('clients.create')}}" class="btn btn-success">
                      Adicionar
                    </a>

                </div>

                <table>
                	<tr>
                		<th>id</th>
                		<th>name</th>
                		<th>email</th>
                		<th>year</th>
                		<th>obs</th>
                	</tr>
                	  	@foreach ($clients as $client)

                		<tr>
	                		
                 			<td>{{ $client->id }}</td>
               				<td>{{ $client->name }}</td>
               				<td>{{ $client->email }}</td>
               				<td>{{ $client->year }}</td>
               				<td>{{ $client->obs }}</td>
              			
                		</tr>
                	@endforeach

                </table>

                {{ $clients->links()}}

               <div class="card-body">
           

                </div> 
            </div>
        </div>
            </div>
</div>
@endsection
