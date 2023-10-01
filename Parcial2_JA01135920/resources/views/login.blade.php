<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Iniciar Sesión</button>
        </div>
    </form>
</body>
</html>
