<!DOCTYPE html>
<html>
<head>
<title>Komentar Buku Tamu</title>
</head>
<body>
<h1>Komentar dari Para Tamu</h1>
@if ($data->isEmpty())
<p>Belum ada komentar.</p>
@else
@foreach ($data as $item)
<div style="border:1px solid #ccc; padding:10px;
margin-bottom:10px;">
<strong>{{ $item->nama_pengunjung }}</strong> berkata:<br>
<p>{{ $item->komentar }}</p>
<small>Waktu: {{ $item->created_at }}</small>
</div>
@endforeach
@endif
<br>
<a href="{{ route('home') }}">Kembali ke Halaman Utama</a>
</body>
</html>
