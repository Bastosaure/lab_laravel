<form action="{{url('message')}}" type="post">
    {{csrf_field()}}
    <input type="text" name="content" placeholder="content" value="{{old('content')}}">
    <input type="submit" value="valider">
    @if ($errors->has('content'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
    @endif
</form>