<div class="col-md-12 col-sm-12 p-20">
	<div class="list-group">
		@foreach($notaseditadas as $notaeditada)
		<a href="javascript:void(0)" class="list-group-item list-group-item-action flex-column align-items-start @if($loop->index == 0) active @endif">
			<div class="d-flex w-100 justify-content-between">
				<small></small>
			</div>
			<p class="mb-1">{!! $notaeditada->nota !!}</p>
			<small>{{$notaeditada->fecha_edicion->format('l j \\ F h:i:s a')}}</small>
		</a>
		@endforeach
	</div>
</div>