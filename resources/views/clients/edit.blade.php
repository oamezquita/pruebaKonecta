@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Editar Cliente</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Volver</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> Hay problemas con la informacion.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('clients.update',$client->id) }}" method="POST">

    	@csrf

        @method('PUT')


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Nombre:</strong>

		            <input type="text" name="name" value="{{ $client->name }}" class="form-control" placeholder="Nombre">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Documento:</strong>
		            <input type="text" name="document" value="{{ $client->document }}" class="form-control" placeholder="Documento">
		        </div>

		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Email:</strong>

		            <input type="text" name="email" value="{{ $client->email }}" class="form-control" placeholder="Email">
		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Direccion:</strong>

		            <input type="text" name="address" value="{{ $client->address }}" class="form-control" placeholder="Direccion">
		        </div>

		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		      <button type="submit" class="btn btn-primary">Guardar</button>

		    </div>

		</div>


    </form>
@endsection