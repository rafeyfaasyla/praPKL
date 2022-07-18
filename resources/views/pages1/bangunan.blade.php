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
    <legend>Material</legend>
    <center><h4>Toko Bangunan</h4></center><hr>
    Hallo pesanan anda : <b>{{$b_bangunan}}</b>
    @if($b_bangunan == 'pasir urug')
      <br> harga {{$b_bangunan}} Rp.50000
    @elseif($b_bangunan == 'batako besar')
      <br> harga {{$b_bangunan}} Rp.30000
      @elseif($b_bangunan == 'bata merah')
      <br> harga {{$b_bangunan}} Rp.40000
    @elseif($b_bangunan == 'batu apung')
      <br> harga {{$b_bangunan}} Rp.65000
    
    @else
    <br>
       list barang tidak ditemukan
    @endif
    <br>
    <br>

    pesanan anda : <b>{{$b_bangunan1}}</b>
    @if($b_bangunan1 == 'pasir urug')
      <br> harga {{$b_bangunan1}} Rp.50000
    @elseif($b_bangunan1 == 'batako besar')
      <br> harga {{$b_bangunan1}} Rp.30000
      @elseif($b_bangunan1 == 'bata merah')
      <br> harga {{$b_bangunan1}} Rp.40000
    @elseif($b_bangunan1 == 'batu apung')
      <br> harga {{$b_bangunan1}} Rp.65000
    
    @else
    <br>
       list barang tidak ditemukan
    @endif
    
    </fieldset>
</body>
</html>