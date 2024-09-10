<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email:</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Password:</label>
        <input id="password" type="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</body>
</html>
