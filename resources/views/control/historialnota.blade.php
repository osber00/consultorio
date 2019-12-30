<ul>
    @foreach($notaseditadas as $notaeditada)
    <li>{{$notaeditada->nota}} - {{$notaeditada->fecha->format('l j \\ F h:i:s a')}}</li>
    @endforeach
</ul>