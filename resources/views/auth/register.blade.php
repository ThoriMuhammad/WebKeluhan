<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>

    <link href="login.css" rel="stylesheet">
</head>

<body>
    <div class="form-section">
        <form action="{{ route('register') }}" method="POST" class="form">
            @csrf
            <h2 class="form-title">Sign up</h2>

            <div class="form-group">
                <input type="text" name="name" class="form-input" placeholder=" " required>
                <label class="form-label">Nama</label>
            </div>
            <div class="form-group">
                <input type="number" name="nik" class="form-input" placeholder=" " required>
                <label class="form-label">NIK</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder=" " required>
                <label class="form-label">Password</label>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-input" placeholder=" " required>
                <label class="form-label">Konfirmasi Password</label>
            </div>
            <button type="submit" class="form-button">Sign up</button>
            <p><a href="{{ route('login') }}">Sudah punya akun? Login</a></p>

        </form>
    </div>
</body>

</html>

</html>
