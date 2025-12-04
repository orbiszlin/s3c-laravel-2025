<div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="{{old('email')}}" required>
</div>
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{old('name')}}" required>
</div>
<div>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
</div>
<div>
    <label for="confirm_password">Confirm password</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
