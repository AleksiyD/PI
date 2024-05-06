<p class="m-0">
	<a data-bs-toggle="collapse" href="#collapse-{{$id}}" role="button" aria-expanded="false" aria-controls="collapse-{{$id}}">
		{{ $head }}
	</a>
</p>
<div class="collapse" id="collapse-{{$id}}" style="max-width: 50%">
	<div class="card card-body">
		{{ $slot }}
	</div>
</div>