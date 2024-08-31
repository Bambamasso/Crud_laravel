<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1 class="p-3  text-center">Ajouter un article</h1>
           <form action="{{route('update',['id'=>$modifArt->id])}}" method="post">
          @csrf
          @method('PUT')
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label">Nom de l'article</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nourriture" name="nom" value="{{$modifArt->nom}}">
                </div>
                <div class="mb-2">
                    <label for="exampleFormControlTextarea1" class="form-label">description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" value="{{$modifArt->description}}">{{$modifArt->description}}</textarea>
                </div>
              <input type="submit" class="btn btn-primary">
           </form>
           <a href= " {{route('index')}}" class="btn btn-danger">Revenir à la liste</a>
       </div>
</body>
</html>