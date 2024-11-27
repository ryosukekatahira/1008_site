@if ($errors->has('msgarea'))
    @foreach ($errors->get('msgarea') as $error)
        <div class="msgarea">{!! $error !!}</div>
    @endforeach
@endif