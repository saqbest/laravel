<form method="POST" action="/auth/register" enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>
    <input type="file" name="file" id="file">

    <div>
        <button type="submit">Register</button>
    </div>
</form>