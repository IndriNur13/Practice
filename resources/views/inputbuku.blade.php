<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="">
        <small>Judul Buku</small> <br>
        <input type="text" name="judul_buku" id="" value="{{old('judul_buku')}}"> <br>
        @error('judul_buku')
            <small>{{$message}}</small> <br>
        @enderror
        <small>Penulis</small> <br>
        <input type="text" name="penulis" id="" value="{{old('penulis')}}"><br>
        @error('penulis')
            <small>{{$message}}</small> <br>
        @enderror
        <small>Penerbit</small> <br>
        <input type="text" name="penerbit_id" id="" value="{{old('penerbit_id')}}" > <br>

        <small>Tahun Terbit</small> <br>

        <small>Kategori</small> <br>
    </form>
</body>
</html>
