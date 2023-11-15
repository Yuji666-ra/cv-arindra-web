<!-- resources/views/career.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Career Application Form</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<style>
    /* public/css/styles.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 50%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="file"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

.success-message {
    background-color: #dff0d8;
    color: #3c763d;
    border: 1px solid #3c763d;
    padding: 10px;
    margin-bottom: 15px;
    border-radius: 4px;
}

</style>
</head>
<body>
    <div class="container">
        <h1>Career Application Form</h1>
        @if(session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif
        <form action="{{ route('careers-index') }}" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="resume">Resume:</label>
            <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br><br>

            <label for="cover_letter">Cover Letter:</label><br>
            <textarea id="cover_letter" name="cover_letter" rows="5" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>

        {{-- Menampilkan file PDF yang diunggah --}}
        @if(isset($resumeUrl))
            <embed src="{{ $resumeUrl }}" type="application/pdf" width="100%" height="600px">
        @endif

    </div>
</body>
</html>
