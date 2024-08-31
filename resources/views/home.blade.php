<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
</head>
<body>
    @method('DELETE')
 <div class="container text-center">
        <h1 class="p-3">Liste des articles</h1>
        <button class=""><a href="{{route('ajouter')}}" class="btn btn-primary">Ajouter un article</a></button>
 @if(session('status'))
      <div class="alert alert-success">{{session('status')}}</div>
      @endif
        <div class="mt-4">
            <table class="table">
                  <thead>
                      <tr>
                        <td>Nom</td>
                        <td>action</td>
                      </tr>
                  </thead>
                  @foreach ($donne as $value):
                  
                  <tbody>
                      <tr>
                         <td>{{$value->nom}}</td>
                         
                         <td>
                            <a href="{{route('details',$value->id)}}" class="btn btn-info">détails</a>
                             <a href="{{route('modifier',['id'=>$value->id])}}" class="btn btn-primary">Modif</a>
                             <a href="{{route('suppression',['id'=>$value->id])}}" class="btn btn-danger">Suppr</a>
                         </td>
                      </tr>
                  </tbody>
                  @endforeach
            </table>
        </div>
 </div>
   

    
</body>
</html>