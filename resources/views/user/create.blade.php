<h1>Vytvoření uživatele</h1>

<form action="{{route('users.store')}}" method="post">

    @csrf
    @include('user.form')

    <input type="submit" value="Vytvořit">
</form>
