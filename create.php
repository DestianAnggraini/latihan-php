<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Data</title>
    <style>
        /* Gaya untuk seluruh halaman */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            /* Latar belakang abu-abu terang */
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Gaya untuk heading */
        h1 {
            font-size: 2.5rem;
            color: #343a40;
            /* Abu-abu gelap */
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
        }

        /* Gaya untuk tautan */
        a {
            font-size: 1rem;
            color: #007bff;
            /* Biru */
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
            transition: color 0.3s ease-in-out;
        }

        a:hover {
            color: #0056b3;
            /* Biru lebih gelap saat hover */
            text-decoration: underline;
        }

        /* Gaya untuk formulir */
        form {
            background-color: #ffffff;
            /* Putih */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
            width: 100%;
            max-width: 400px;
        }

        /* Gaya untuk input */
        form input[type="text"],
        form input[type="number"],
        form input[type="file"] {
            width: 95%;
            padding: 10px;
            margin: 10px 0;
            font-size: 1rem;
            border: 1px solid #ced4da;
            /* Border abu-abu terang */
            border-radius: 4px;
            transition: border-color 0.3s ease-in-out;
        }

        form input[type="text"]:focus,
        form input[type="number"]:focus,
        form input[type="file"]:focus {
            border-color: #007bff;
            /* Biru saat fokus */
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Efek cahaya */
        }

        /* Gaya untuk tombol submit */
        form input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 1.1rem;
            background-color: #007bff;
            /* Biru */
            color: #ffffff;
            /* Putih */
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
            /* Biru lebih gelap saat hover */
        }

        /* Gaya responsif */
        @media (max-width: 768px) {
            h1 {
                font-size: 2rem;
            }

            form {
                padding: 15px;
            }

            form input[type="submit"] {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <h1>Tambah Produk</h1>
    <a href="show.php">Lihat data produk</a>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="input nama produk">
        <input type="number" name="price" placeholder="input harga produk">
        <input type="file" name="image">
        <input type="submit" value="simpan" name="submit">
    </form>
</body>

</html>