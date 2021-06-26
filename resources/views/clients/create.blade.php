@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Crear nuevo Cliente</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('clients.index') }}"> Volver</a>

            </div>

        </div>

    </div>


    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> Hay un problema con la informacion.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <form action="{{ route('clients.store') }}" method="POST">

    	@csrf


         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Nombre:</strong>

		            <input type="text" name="name" class="form-control" placeholder="Name">

		        </div>

		    </div>		    
            
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Documento:</strong>

		            <input type="text" class="form-control"  name="document" placeholder="Documento">

		        </div>

		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Email:</strong>

		            <input type="text" class="form-control" name="email" placeholder="Email">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Direccion:</strong>

		            <input type="text" class="form-control"  name="address" placeholder="Direccion">

		        </div>

		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Guardar</button>

		    </div>

		</div>


    </form>



@endsection