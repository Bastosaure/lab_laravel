{{--{{ dd($users) }}--}}

<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li><a href="{{ route('profil-user', ['$id' => $user->id]) }}">voir le profil ID</a></li>
        <li><a href="{{ route('profil-email', ['$email' => $user->email]) }}">voir le profil EMAIL</a></li>
    @endforeach
</ul>

