<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Price Year:</label>
        <input type="text" name="" id="">
        <button type="submit">submit</button>
    </form>
    <!-- @foreach ($cars as $car)
    <p>{{$car}}</p>
    @foreach ($car->price as $price )
    <p>{{$price}}</p>
    @endforeach
    @endforeach -->

    <table class="table table-striped table-hover table-reflow">
        <tr>
            <th><strong>Car</strong></th>
            <th><strong>YEARS</strong></th>
        </tr>
        @foreach($cars as $key=>$value)

        <tr>
            <td> {{ $value->name }} </td>
            @
            <td>{{$value->price}}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>