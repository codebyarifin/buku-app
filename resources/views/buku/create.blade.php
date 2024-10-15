<!-- resources/views/buku/create.blade.php -->
<h1>Tambah Buku Baru</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('buku.store') }}" method="POST">
    @csrf
    <label for="judul_buku">Judul Buku:</label>
    <input type="text" name="judul_buku" id="judul_buku" required><br><br>

    <label for="penulis">Penulis:</label>
    <input type="text" name="penulis" id="penulis" required><br><br>

    <label for="penerbit">Penerbit:</label>
    <input type="text" name="penerbit" id="penerbit" required><br><br>

    <label for="tahun_terbit">Tahun Terbit:</label>
    <input type="number" name="tahun_terbit" id="tahun_terbit" required><br><br>

    <label for="nomor_isbn">Nomor ISBN:</label>
    <input type="text" name="nomor_isbn" id="nomor_isbn" required><br><br>

    <button type="submit">Tambah Buku</button>
</form>

<style>
    /* Common styles for both pages */
    h1 {
        color: #333;
        text-align: center;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #f5c6cb;
        border-radius: 5px;
    }

    form {
        max-width: 600px;
        margin: 0 auto;
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        font-weight: bold;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        box-sizing: border-box;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #28a745; /* Green color for the button */
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #218838; /* Darker green on hover */
    }

    .alert ul {
        margin: 0;
        padding-left: 20px;
    }
</style>
