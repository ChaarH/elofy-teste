@include('template.head')

<h1>Lista de usuários</h1>

<button class="btn-submit">Clique</button>

<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} - {{ $user->email }}</li>        
    @endforeach
</ul>