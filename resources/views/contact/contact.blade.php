<section id="detail" style="margin-top: 40px" class="py-5">
</section>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us Page</title>
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
            max-width: 800px;
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
            width: 200px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
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


        #logo-img {
            filter: invert(1);
            /* Membalikkan warna ikon menjadi putih saat latar belakang berwarna gelap */
        }

        /* Atur warna latar belakang dan bayangan untuk navbar saat di-scroll */
        .scroll-nav-active {
            background-color: white;
            /* Ganti warna latar belakang navbar saat di-scroll */
            box-shadow: 1px 1px 11px -1px rgba(1, 1, 1, 0.08);
        }

        /* Tambahkan class scroll-nav-active pada navbar saat di-scroll */
        .navbar-nav .nav-item a[href="#home"] {
            color:
                black
                /* Warna font untuk elemen Home */
            ;
        }

        .navbar-nav .nav-item a[href="#contact"] {
            color:
                black
                /* Warna font untuk elemen Home */
            ;
        }

        .navbar-nav .nav-item a[href="#pricing"] {
            color:
                black
                /* Warna font untuk elemen Home */
            ;
        }

        .scroll-nav-active .navbar-nav .nav-item .nav-link,
        .scroll-nav-active .navbar-nav .nav-item2 {
            color:

                /* Warna font default saat di-scroll */
            ;
        }

        /* Hapus CSS untuk warna font di luar kondisi scroll */
        .navbar-nav .nav-item .nav-link,
        .navbar-nav .nav-item2 {
            color: black;
            /* Warna font default tanpa di-scroll */
        }

        /* Atur warna font pada dropdown menu saat di-scroll */
        .scroll-nav-active .navbar-nav .dropdown-menu .dropdown-item {
            color:
                /* Warna font default saat di-scroll */
            ;
        }

        /* Hapus CSS untuk warna font di luar kondisi scroll pada dropdown menu */
        .navbar-nav .dropdown-menu .dropdown-item {
            color: black;
            /* Warna font default tanpa di-scroll */
        }

        /*memperbesar tulisan view*/
        .larger-font {
            font-size: 14px;
        }

        /*Cover Jumbotron*/
        .cover {
            height: 50vh;
            /* 100% tinggi dari viewport */
            background-color: #37517E;
            /* Ganti dengan warna yang diinginkan */
            color: white;
            /* Warna teks agar terlihat jelas di atas warna latar belakang */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .cover h1 {
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .cover p {
            font-size: 1.5rem;
        }
    </style>

</head>

<body>

    <div class="cover" style=" margin-bottom: 50px; margin-top: -40px">
        <h1>Contact Us</h1>
        <p>Let's Start a Conversation</p>
    </div>

    <section id="form-contact" style="margin-bottom: 80px">
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

            <form method="POST" action="{{ route('send-message') }}">
                @csrf
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Submit</button>


            </form>
        </div>
</body>

</html>
