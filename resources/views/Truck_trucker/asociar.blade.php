<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde asociar:</h1>

    <form action="{{route('truck_trucker.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
    

        <br>
        <h1>Camion:</h1>
        <select name="truck_id">
            @foreach($trucks as $truck)
                <option value="{{ $truck->id }}">{{ $truck->id }} - {{ $truck->model}}</option>
            @endforeach
        </select>
        <br>
        <h1>Camionero:</h1>    
        <select name="trucker_id">
            @foreach($truckers as $trucker)
                <option value="{{ $trucker->id }}">{{ $trucker->id }} - {{ $trucker->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">Enviar Formulario:</button>
        </form>
 
</body>
</html>