@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 40px" class="py-5">
    </section>
    <div class="container">
        @if (session('message'))
            <div class="alert">
                {{ session('message') }}
            </div>
        @endif

        <form method="POST" action="{{ route('send-email') }}">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Pesan:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">Kirim</button>
        </form>

    </div>
@endsection
