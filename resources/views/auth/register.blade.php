<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>

    <form method="POST" action="/register">
        @csrf

        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name') <p style="color:red">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email') <p style="color:red">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password">
            @error('password') <p style="color:red">{{ $message }}</p> @enderror
        </div>

        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit">Register</button>
    </form>
</body>
</html>
