<h1>Vytvoření uživatele</h1>

<form action="#">

    @csrf
    @include('user.form')

    <input type="submit" value="Vytvořit">
</form>
