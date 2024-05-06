<div class="col-lg-2 col-md-4">
	@if(!isset($column))
			@php $column = 'name' @endphp
	@endif

	@if(!isset($id))
			@php $id = 'id' @endphp
	@endif

	<select id="select_{{$field}}" wire:model="fields.{{$field}}" wire:loading.attr="disabled" class="custom-select custom-select-sm form-control form-control-sm" data-allow-clear="true" data-placeholder='{{ $head }}'>
			<option value="">//{{ $head }}</option>
			@foreach ($data as $item)
					<option value="{{ $item->{$id} }}">{{ $item->{$relation}->{$column} }}</option>
			@endforeach
	</select>
</div>

@push('child-script')
	<script>
	$(document).ready(function() {
			$('#select_{{$field}}').select2({
					width: '100%'
			});
			$('#select_{{$field}}').on('change', function (e) {
					var data = $('#select_{{$field}}').select2("val");
					@this.set('fields.{{$field}}', data);
			});
			window.livewire.on('render', () => {
							$('#select_{{$field}}').select2({
									width: '100%'
							});
			});
	});
</script>
@endpush