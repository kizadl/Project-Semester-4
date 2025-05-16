<h2>Halo, {{ $user->name }}</h2>
<p>Terima kasih telah mendaftar. Klik tombol di bawah ini untuk verifikasi akun Anda:</p>

<a href="{{ url('/verify-email/' . $user->verification_token) }}"
    style="background: #4CAF50; color: white; padding: 10px 20px; text-decoration: none;">
    Verifikasi Email
</a>

<p>Atau salin dan tempel link ini di browser Anda:</p>
<p>{{ url('/verify-email/' . $user->verification_token) }}</p>
