<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Güncelle</title>
</head>
<body>
    
<form action="/guncelle/{{$user->id}}" method="post">
    <div class="form-group">
    <label for="exampleName">Name</label>
    <input type="text" class="form-control" name="name" value="{{$user->name}}"  id="exampleInputEmail1">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email Adresi</label>
    <input type="email" class="form-control" name="email" value="{{$user->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  @csrf
  <button type="submit" class="btn btn-primary">Güncelle</button>
</form>

</body>
</html>