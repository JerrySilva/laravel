@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categorias</div>

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
                   
                  <form class="form" method="POST" action="{{ route('categories.store')}}">

                    {{ csrf_field() }}

                    {{method_field('POST')}}
                              

                    <div class="form-group">
                      <label>Nome</label>
                      <input type="Nome" name="name" class="form-control" />
                    </div>
          
                           
                   

                    <input type="submit" value="salvar" Class="btn btn-primary">     

                </div> 
            </div>
        </div>
            </div>
</div>
@endsection

