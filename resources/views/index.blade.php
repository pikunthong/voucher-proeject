

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>


    @if($message = Session::get('success'))
        <p>{{$message}}</p>
    @endif
    <button><a href="/new">create</a></button>
{{--    <button><a href="/pre-use">Preview & Use Coupon </a></button>--}}
    @if(!$coupons->isEmpty())

        <p>Your Total Discount Create = {{$sum}} Balance {{1500 - $sum }} </p>
        <p>Your Total Discount Create = {{($sum /1500 )*100}}% </p>
    @endif


    @if(!$coupons->isEmpty())

        <table class="table">
            <thead>
            <tr>
                <th>วันเดือนปีเวลา</th>
                <th>Code (รหัสคูปอง)</th>
                <th>Discount Price (ราคาที่ได้ลด)</th>
                <th>Expire Date (วันหมดอายุ)</th>
                <th>Status (สถานะ)</th>
            </tr>
            </thead>
            <tbody>
            @foreach($coupons as $coupon)
                <tr>
                    <td>{{$coupon->created_at}}</td>
                    <td><a href="/pre-use/{{$coupon->keyword."".$coupon->discount."".$coupon->code."".$coupon->keyword[0]}}">{{$coupon->keyword."".$coupon->discount."".$coupon->code."".$coupon->keyword[0]}}</a></td>
                    <td>{{$coupon->discount}}</td>
                    <td>{{$coupon->endTime}}</td>
                    <td>
                        @if($coupon->status == 0)
                            Available
                        @else
                            Used
                        @endif
                    </td>

                </tr>
            @endforeach

        </table>

    @endif


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
-->
</body>
</html>
