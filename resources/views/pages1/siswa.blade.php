<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Data siswa</legend>
        @foreach ($siswa as $murid)
           id : {{$murid['id']}}<br>
           umur : {{$murid['umur']}}<br>
           status :
              @if($murid['umur'] >= 17)
                Anda berhak mendapatkan SIM
              @else
                Anda belum berhak mendapatkan SIM
              @endif
            <br>
            kelas : {{$murid['kelas']}}<br>
            Mata Pelajaran :
            @foreach($murid['mapel'] as $mapel)
               <li>{{$mapel}}</li>
            @endforeach
               <hr>
        @endforeach

    </fieldset>
</body>
</html>