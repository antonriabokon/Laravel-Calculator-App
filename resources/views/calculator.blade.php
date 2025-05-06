<!DOCTYPE html>
<html>
<head>
    <title>Laravel Calculator</title>
</head>
<body>
    <h1>Laravel Calculator</h1>
    <form method="POST" action="{{ route('calculate') }}">
        @csrf
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calculate</button>
    </form>

    @if (isset($result))
        <h2>Result: {{ $result }}</h2>
    @endif
</body>
</html>