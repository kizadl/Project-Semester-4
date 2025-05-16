<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Belum Diverifikasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 2rem 3rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #ffc107;
            /* warna kuning/oranye */
            margin-bottom: 1rem;
        }

        p {
            color: #333;
            margin-bottom: 1.5rem;
        }

        .button {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 0.5rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Email Belum Diverifikasi</h1>
        <p>Silakan cek email Anda dan klik link verifikasi yang kami kirimkan untuk mengaktifkan akun.</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="button" type="submit">Logout</button>
        </form>
    </div>
</body>

</html>
