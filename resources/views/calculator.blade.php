<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<div class="main-content">
    <h1>Caculator</h1>
    <form method="post" action="{{route('result_cal')}}">
        @csrf
        <label>Number: 1</label>
        <input type="number" id="number_1" placeholder="Enter number no 1" name="number_1">
        <br>
        <label>Number: 2</label>
        <input type="number" id="number_2" placeholder="Enter number no 2" name="number_2">
        <br>
        <select id="operator" name="operator">
            <option name="+" id="+" value="+">Addition(+)</option>
            <option name="-" id="-" value="-">Subtraction(-)</option>
            <option name="x" id="x" value="x">Multiplication(X)</option>
            <option name="/" id="/" value="/">Division(/)</option>
        </select>
        <br>
        <button type="submit" name="submit" id="submit">Check Result</button>
    </form>
</div>
</body>
</html>