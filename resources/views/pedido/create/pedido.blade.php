<div id="clone" class="row">

	{{-- Lista de Medicamentos --}}
	<div class="mb-3 col-8">
		<select class="form-select" id="medicamento" name="medicamento[]">
			<option selected>Medicamento...</option>
			@foreach ($medicamentos as $medicamento)
			<option value="{{ $medicamento->id }}">{{ $medicamento->monodroga."   -   ".$medicamento->presentacion }}</option>
			@endforeach
		</select>
	</div>

	{{-- Cantidad de Medicamento --}}
	<div class="mb-3 col-3">
		<input type="number" class="form-control" id="cantidad" name="cantidad[]" placeholder="Cant...">
	</div>

	<div class="col-1">
		<button type="button" class="btn btn-danger" id="delMedicamento">x</button>
	</div>
</div>

<div id="cloned"></div>

<button type="button" class="btn btn-primary" id="addMedicamento">Añadir</button>

<script>
	$(document).ready(function(){

		$("#addMedicamento").click(function(event) {
			$('#clone').clone().appendTo('#cloned');
		});

		$("#delMedicamento").click(function(event) {
			$(this).closest('#clone').remove();
			event.preventDefault();
		});



	});
</script>

