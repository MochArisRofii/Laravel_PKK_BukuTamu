<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
</head>

<body>
    <h1>Login Admin</h1>
    <form action="/admin/login" method="POST">
        @csrf
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>

</html>
