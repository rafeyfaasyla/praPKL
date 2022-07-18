<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><b><h5>Latihan controller</h5></b></center>
    <fieldset>
        <legend>Data Barang</legend>
        <center><h4>List Data Belanja</h4></center>

        @foreach ($belanja as $data)
           @php $total = 0; @endphp
           Nama : {{$data['nama']}} <br>
           Jenis Barang :
           @foreach($data['membeli'] as $belikan)
             <li>
                 Membeli : {{$belikan ['beli']}} <br>
                 Harga : {{$belikan ['harga']}} <br>
             </li>
             <hr>


               @php $total += $belikan ['harga']  @endphp 
           @endforeach
           Total Belanja : {{$total}} <br><br><br><br><br>

           @if($total < 500000)
             @php $cashback = (5/100) * $total @endphp
           @elseif($total >= 500000)
             @php $cashback = (10/100) * $total @endphp
           @else 
           <b>total belanja setelah dapat cashback {{$data['nama']}}:</b>
           <hr>
           @endif

            <!-- @if ($total < 500000)
               Selamat! anda mendapatkan cashback sebesar 10% <br>
            @elseif ($total > 500000)
               Selamat! anda mendapatkan cashback sebesar 5% <br>
            @else
               Maaf anda tidak mendapatkan cashback
            @endif

            @php $cashback = $total / count($data['membeli']) @endphp
            Total Belanja setelah dapat cashback <b>{{$data['nama']}}</b>:
            {{$cashback}} <br>  -->
        @endforeach
    </fieldset>
</body>
</html>