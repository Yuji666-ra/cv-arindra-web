<section id="detail" style="margin-top: 40px" class="py-5">
</section>

<!DOCTYPE html>
<html>

<head>
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Gaya CSS Anda di sini */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 3px;
        }

        .alert-success {
            background-color: #4CAF50;
            color: #ffffff;
        }

        .alert-danger {
            background-color: #f44336;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <h1>Form Pemesanan</h1>
    <section id="form-buy">
        <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" required>

                <label for="telephone">No.Telepon:</label>
                <input type="text" name="telp" id="telephone" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="service">Pilih Layanan:</label>
                <select class="form-control select2" name="service" style="width: 100%;">
                    <option selected="selected">-- Pilih --</option>
                    <option>Company Profile</option>
                    <option>Video Event</option>
                    <option>Photo Event</option>
                    <option>Jasa Drone & Pilot</option>
                </select>

                <label for="packet">Pilih Paket Layanan:</label>
                <select class="form-control select2" name="packet" style="width: 100%;">
                    <option selected="selected">-- Pilih --</option>
                    <option>Gold</option>
                    <option>Silver</option>
                    <option>Bronze</option>
                </select>

                <button type="submit">Pesan Sekarang</button>
            </form>
        </div>
    </section>
</body>

</html>
</section>
