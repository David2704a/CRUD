<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url ('assets/css/file.css')}}">
    <title>Publicar-Imagenes</title>
</head>
<body>
    <div class="subir">
        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
        <header>Arrastrar y soltar para cargar archivo</header>
        <span>O</span>
        
    <form method="POST" action="{{ route('files.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"  >
        @error('file')
            <small class="">{{ $message }}</small>
        @enderror
        <button type="submit" >Subir imagen </button>
    </form>
   
</div>
<script src="{{url('assets/js/file.js')}}"></script>
</body>
</html>