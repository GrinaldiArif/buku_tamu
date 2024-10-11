
<head>
    <title>Isi Buku Tamu</title>
    </head>
    <body>
    <h1>Isi Buku Tamu</h1>
    @if ($errors->any())
    <div style="color:red;">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
    @endif
    <form action="{{ route('bukutamu.store') }}" method="POST">
    @csrf
    <label for="nama_pengunjung">Nama:</label><br>
    <input type="text" id="nama_pengunjung" name="nama_pengunjung"
    value="{{ old('nama_pengunjung') }}"><br><br>
    <label for="komentar">Komentar:</label><br>
    <textarea id="komentar" name="komentar">{{ old('komentar')
    }}</textarea><br><br>
    <button type="submit">Kirim</button>
    </form>
    <br>
    <a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
    </body>
    </html>
