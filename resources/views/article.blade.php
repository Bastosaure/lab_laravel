@if ($errors->any())
    <ul>
        @foreach( $errors->all() as $error)
            <li>{{ $errors }}</li>
       @endforeach
    </ul>
@endif
<form action="{{url('article')}}" method="post">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="titre" value="{{ old('title') }}">
    <input type="text" name="author" placeholder="auteur" value="{{ old('author') }}">
    <input type="text" name="content" placeholder="description" value="{{ old('content') }}">
    <input type="submit" name="" id="" value="envoyer">
</form>