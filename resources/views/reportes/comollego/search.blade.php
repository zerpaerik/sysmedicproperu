@extends('layouts.app')

@section('content')
</br>
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-users"></i>
					<span><strong>Nùmero de Atenciones</strong></span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-1">
					<form action="/generalegresos-search" method="get">
						<label for="">Inicio</label>
						<input type="date" name="inicio" value="{{ Carbon\Carbon::now()->toDateString()}}" style="line-height: 20px">
						<label for="">Final</label>
						<input type="date" name="final" value="{{ Carbon\Carbon::now()->toDateString()}}" style="line-height: 20px">
					
						<input type="submit" value="Buscar" class="btn btn-primary" style="margin-left: 30px;">
					</form>
					<form action="/pagarmultiple" method="post">
				<thead>
						<tr>
							<th>No Selecciono</th>
							<th>Recomendaciòn</th>
							<th>Redes</th>
							<th>Aviso</th>
						    <th>Otro</th>
						
						</tr>
					</thead>
					<tbody>

							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
							</tr>
					</tbody>
					
					</form>
				</table>
				{{$atenciones->links()}}	
			</div>
	
		</div>
	</div>
</div>
@if(isset($created))
	<div class="alert alert-success" role="alert">
	  A simple success alert—check it out!
	</div>
@endif

@endsection