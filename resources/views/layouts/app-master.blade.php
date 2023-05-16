<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Adaugare utilizatori</title>
 <!-- Bootstrap CSS File -->
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after*
these tags -->
 <meta name="description" content="">
 <meta name="author" content="">
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
 <nav class="navbar navbar-default">
 <div class="container-fluid">
 <div class="navbar-header">
 <a class="navbar-brand" href="#">Exemplu aplicatie-Laravel CRUD </a>
 </div>
 <ul class="nav navbar-nav">
 </ul>
 </div>
 </nav>
 <main class="container mt-5">
 @yield('content')
 </main>
 <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

 </body>
</html>