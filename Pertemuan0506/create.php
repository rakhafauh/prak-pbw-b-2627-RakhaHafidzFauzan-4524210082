<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Tambah Mahasiswa</title>
</head>
<body class="bg-gray-50 p-6 font-sans text-gray-800">
    <form action="store.php" method="POST"
        class="max-w-sm mx-auto bg-white p-6 rounded-lg shadow-md flex flex-col">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">
            Tambah Mahasiswa
        </h2>

        <label for="nim" class="text-sm font-semibold mb-1">NIM:</label>
        <input type="text" id="nim" name="nim" required
            class="mb-4 p-2 border border-gray-300 rounded">

        <label for="nama" class="text-sm font-semibold mb-1">Nama:</label>
        <input type="text" id="nama" name="nama" required
            class="mb-4 p-2 border border-gray-300 rounded">

        <label for="email" class="text-sm font-semibold mb-1">Email:</label>
        <input type="email" id="email" name="email" required
            class="mb-4 p-2 border border-gray-300 rounded">

        <label for="prodi" class="text-sm font-semibold mb-1">Prodi:</label>
        <input type="text" id="prodi" name="prodi" required
            class="mb-4 p-2 border border-gray-300 rounded">

        <label for="angkatan" class="text-sm font-semibold mb-1">Angkatan:</label>
        <input type="text" id="angkatan" name="angkatan" required
            class="mb-4 p-2 border border-gray-300 rounded">

        <label for="ipk" class="text-sm font-semibold mb-1">IPK:</label>
        <input type="number" id="ipk" name="ipk" step="0.01" required
            class="mb-6 p-2 border border-gray-300 rounded">

        <button type="submit" class="bg-blue-600 text-white font-bold py-2 rounded">
            Simpan
        </button>
    </form>
</body>
</html>