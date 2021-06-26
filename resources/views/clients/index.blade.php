@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Clientes</h2>

            </div>

            <div class="pull-right">

                @can('client-create')

                <a class="btn btn-success" href="{{ route('clients.create') }}"> Crear Nuevo Cliente</a>

                @endcan

            </div>

        </div>

    </div>
    <br>

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Nombre</th>

            <th>Documento</th>

            <th>Enail</th>

            <th>Dirección</th>

            <th width="280px">Acciones</th>

        </tr>

	    @foreach ($clients as $client)

	    <tr>

	        <td>{{ ++$i }}</td>

	        <td>{{ $client->name }}</td>

	        <td>{{ $client->document }}</td>
            
            <td>{{ $client->email }}</td>
            
            <td>{{ $client->address }}</td>

	        <td>

                <form action="{{ route('clients.destroy',$client->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('clients.show',$client->id) }}">Mostar</a>

                    @can('client-edit')

                    <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">Editar</a>

                    @endcan


                    @csrf

                    @method('DELETE')

                    @can('client-delete')

                    <button type="submit" class="btn btn-danger">Borrar</button>

                    @endcan

                </form>

	        </td>

	    </tr>

	    @endforeach

    </table>


    {!! $clients->links() !!}

@endsection