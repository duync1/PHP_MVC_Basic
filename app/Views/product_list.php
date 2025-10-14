<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Product List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price ($)</th>
        </tr>

        <?php foreach ($products as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
                <td><?= $p['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
