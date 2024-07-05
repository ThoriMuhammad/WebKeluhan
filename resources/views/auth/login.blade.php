<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>

    <link href="login.css" rel="stylesheet">
</head>

<body>
    <div class="form-section">
        <form action="{{ route('login') }}" method="POST" class="form">
            @csrf
            <h2 class="form-title">Sign in</h2>
            <div class="form-group">
                <input type="text" name="nik" class="form-input" placeholder=" " required>
                <label class="form-label">NIK</label>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-input" placeholder=" " required>
                <label class="form-label">Password</label>
            </div>
            <button type="submit" class="form-button">Sign in</button>
        </form>
    </div>
</body>

</html>

</html>
