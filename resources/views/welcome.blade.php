<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        {{-- Referensi gambar dengan Vite --}}
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/main.svg') }}" alt="image">

        {{-- Uji coba Bootstrap dan Bootstrap Icons --}}
        <button type="button" class="btn btn-primary mt-3">
            <i class="bi bi-check-circle"></i> Bootstrap berhasil terpasang
        </button>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
