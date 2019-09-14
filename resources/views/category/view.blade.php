@extends('layouts.admin')
@section('content')
<div class="col-12">
	<center>
	<h2>Listas de Categorias</h2>
	</center>
	<br>
	<button type="button" class="btn 	btn-success" data-toggle="modal" 	data-target="#exampleModal">
  	Agregar nueva Categoria
	</button>
	<br>
	<br>	
	<table class="table ">
		<thead>
			<th>N°</th>
			<th>Nombre</th>
			<th>Texto</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>
		@foreach($categories as $categoria)
		<tbody>
			<th>{{$categoria->id}}</th>
			<td>{{$categoria->name}}</td>
			<th>{{$categoria->body}}</th>
			<th>
				<button type="button" class="btn 	btn-primary" data-toggle="modal" 	data-target="#exampleModal-{{$categoria->id}}">
  					Editar
				</button>
			</th>
			<th>
			{!!Form::open(['route' => ['Category.destroy',$categoria->id],'method' => 'DELETE'])!!}
			{!!Form::submit('Eliminar',['class' => 'btn btn-danger'])!!}
			{!!Form::close()!!}	
			</th>
		</tbody>
			<div class="modal fade" id="exampleModal-{{$categoria->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	{!!Form::model($categoria,['route'=>['Category.update',$categoria->id],'method'=>'PUT','files' => true])!!}
			      </div>
			      <div class="form-group">
					{!!Form::label('Nombre:')!!}
					{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
				  </div>
				  <div class="form-group">
					{!!Form::label('Nombre:')!!}
					{!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Ingrese el Texto'])!!}
				  </div>		
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button  class="btn btn-primary">Guardar Cambios</button>
			      </div>
			      {!!Form::close()!!}	
			    </div>
			  </div>
			</div>
		@endforeach
	</table>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Crear Nueva Categoria</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      	{!!Form::open(['route'=>'Category.store','method'=>'POST'])!!}
			      </div>
			      <div class="form-group">
					{!!Form::label('Nombre:')!!}
					{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
				  </div>
				  <div class="form-group">
					{!!Form::label('Nombre:')!!}
					{!!Form::textarea('body',null,['class'=>'form-control','placeholder'=>'Ingrese el Texto'])!!}
				  </div>	
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
			      </div>
			      {!!Form::close()!!}	
			    </div>
			  </div>
			</div>		
</div>
@stop