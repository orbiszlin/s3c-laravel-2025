<h1>Editace uživatele: {{$user->name}}</h1>

<form action="#">

    @csrf
    @include('user.form')

    <input type="submit" value="Uložit">
</form>
