<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>new things</title>
</head>
<body>
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST"> 
            @csrf 
            <input type="text" name="title" placeholder="Введите название товара" required><br>
            <textarea name="description" cols="30" rows="10" placeholder="Введите описание товара" required></textarea><br>
            <input type="number" name="price" placeholder="Введите цену товара" required><br>
            <input type="submit" value="Создать товар">
        </form>
    </div>
</body>
</html>