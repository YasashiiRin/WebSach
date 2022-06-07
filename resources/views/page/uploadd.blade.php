<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
      <title>File Manager</title> 
   </head>
   <body class="antialiased"> 
   <form action="{{ route('uploadh') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="file" name="image">
      <input type="submit" value="Submit">
   </form>
   <div>
      <a href="">Trở lại Profile của bạn</a>
   </div>
</body>
</html>