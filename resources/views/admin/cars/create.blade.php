<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Auto Toevoegen</title>
</head>
<body>

<h1>Nieuwe Auto Toevoegen</h1>

<form action="{{ route('admin.cars.store') }}" method="POST">
    @csrf

    <label>name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>merk:</label><br>
    <input type="text" name="merk" required><br><br>

    <button type="submit">Opslaan</button>
</form>

</body>
</html>
