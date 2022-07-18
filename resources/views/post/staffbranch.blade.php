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
    <legend>Staff Branch</legend>
        <font color = "FFA500"><center><h4>Staff Branch</h4></center></font>
        <hr>
        <center>
        <table  border ="1">
            <tr style="background-color : aqua;">
                <td>StaffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            @foreach ($sb as $data) 
                <tr>
                    <td>{{$data['staffNo']}}</td>
                    <td>{{$data['sName']}}</td>
                    <td>{{$data['position']}}</td>
                    <td>{{$data['salary']}}</td>
                    <td>{{$data['branchNo']}}</td>
                    <td>{{$data['bAddress']}}</td>
                </tr>
            @endforeach
        </table>
        </center>
        <hr>
        <font color = "FFA500"> <center><h4>Staff</h4></center></font>
        <hr>
        <center>
        <table border = "1">
            <tr style="background-color : green;">
                <td>StaffNo</td>
                <td>sName</td>
                <td>position</td>
                <td>salary</td>
                <td>branchNo</td>
            </tr>
            @foreach ($sb as $data) 
                   <tr>
                        <td>{{$data['staffNo']}}</td>
                        <td>{{$data['sName']}}</td>
                        <td>{{$data['position']}}</td>
                        <td>{{$data['salary']}}</td>
                        <td>{{$data['branchNo']}}</td>
                   </tr>
            @endforeach
        </table>
        </center>
        <hr>
        <font color = "FFA500"> <center><h4>Branch</h4> </center></font>
       <hr>
        <center>
        <table border="1">
            <tr style="background-color : yellow;">
                <td>branchNo</td>
                <td>bAddress</td>
            </tr>
            @foreach ($sb as $data) 
               <tr>
                    <td>{{$data['branchNo']}}</td>
                    <td>{{$data['bAddress']}}</td>
               </tr>
            @endforeach

        </table>
        </center>
    </fieldset>
</body>
</html>