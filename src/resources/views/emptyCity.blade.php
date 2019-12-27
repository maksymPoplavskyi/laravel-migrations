<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .city {
            text-align: center;
            margin-top: 200px;
        }

        .city input[type=text] {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1 style="color: darkred; text-align: center;">Выбранный вами город не существует или не был выбран</h1>

<form action="/weather" method="post" class="city">
    <label for="cityName">выберете город из списка</label>
    <select name="cityName" id="">
        <option value=""></option>
        <option value="123">123</option>
    </select>
    <h2>или</h2>
    <label for="cityNamePost">введите название своего города</label>
    <input type="text" name="cityNamePost" id=""><br>
    <input type="submit" value="показать погоду">
</form>
</body>
</html>
