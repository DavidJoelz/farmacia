{{-- Lista de Farmacias --}}
{{-- <div class="mb-3">
	<label class="form-label col-4" for="farmacia">Farmacia</label>
	<select class="form-select" id="farmacia" name="farmacia">
		<option selected>Elija un farmacia...</option>
		@foreach ($farmacias as $farmacia)
		<option value="{{ $farmacia->id }}">{{ $farmacia->nombre }}</option>
		@endforeach
	</select>
</div> --}}

@php
$forma_pago = array(
	'contado' => 'Contado',
	'5d' => 'Credito 5 dias',
	'10d' => 'Credito 10 dias',
	'15d' => 'Credito 15 dias',
	'20d' => 'Credito 20 dias',
	'30d' => 'Credito 30 dias',
)
	
@endphp

{{-- Lista de Laboratorios --}}
<div class="mb-3">
	<label class="form-label col-4" for="laboratorio">Laboratorio</label>
	<select class="form-select" id="laboratorio" name="laboratorio">
		<option selected>Elija un laboratorio...</option>
		@foreach ($laboratorios as $laboratorio)
		<option value="{{ $laboratorio->id }}">{{ $laboratorio->nombre }}</option>
		@endforeach
	</select>
</div>

{{-- Forma de Pago --}}
<div class="mb-3">
	<label class="form-label col-4" for="forma_pago">Cargo</label>
	<select class="form-select" id="forma_pago" name="forma_pago">
		<option selected>Elija una forma de pago...</option>
		@foreach ($forma_pago as $key => $value)
			<option value="{{ $key }}">{{ $value }}</option>
		@endforeach
	</select>
</div>
