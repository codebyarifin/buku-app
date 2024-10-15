<!-- resources/views/buku/index.blade.php -->
<h1>Daftar Buku</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<ul>
    @foreach ($books as $book)
        <li>{{ $book->judul_buku }} - {{ $book->penulis }} ({{ $book->tahun_terbit }})</li>
    @endforeach
</ul>

<a href="{{ route('buku.create') }}" class="button">Tambah Buku Baru</a>

<style>
    /* Common styles for both pages */
    h1 {
        color: #333;
        text-align: center;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
        border-radius: 5px;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    ul li {
        background-color: #f8f9fa;
        margin: 5px 0;
        padding: 10px;
        border: 1px solid #e9ecef;
        border-radius: 5px;
    }

    .button {
        display: block;
        width: 200px;
        margin: 20px auto;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        color: white;
        background-color: #28a745; /* Green color for the button */
        border-radius: 5px;
        transition: background-color 0.3s; /* Smooth transition */
    }

    .button:hover {
        background-color: #218838; /* Darker green on hover */
    }
</style>
