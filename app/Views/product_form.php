<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Product</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    form {
      width: 340px;
      margin: 50px auto;
      padding: 25px 30px;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
      background-color: #fff;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
      font-size: 20px;
      font-weight: 600;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #444;
      font-weight: 500;
      position: relative;
    }

    label.required::after {
      content: " *";
      color: red;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"] {
      width: 100%;
      padding: 10px 12px;
      margin-bottom: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="number"]:focus {
      border-color: #0078ff;
      box-shadow: 0 0 4px rgba(0, 120, 255, 0.3);
      outline: none;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      background-color: #0078ff;
      color: white;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s ease, transform 0.2s;
    }

    input[type="submit"]:hover {
      background-color: #005fcc;
      transform: scale(1.02);
    }

    .error {
      color: red;
      font-size: 13px;
      margin-top: -4px;
      margin-bottom: 12px;
    }
  </style>
</head>
<body>

<!-- /project/app/Views/product_form.php -->
  <form action="/project/product/handleAddProduct" method="post">
    <h2>Add Product</h2>

    <label for="name" class="required">Product Name:</label>
    <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($old['name'] ?? ''); ?>" require>
    <p class="error"><?php echo $error['name'] ?? ''; ?></p>

    <label for="price" class="required">Product Price:</label>
    <input type="number" id="price" name="price" value="<?php echo htmlspecialchars($old['price'] ?? ''); ?>" require>
    <p class="error"><?php echo $error['price'] ?? ''; ?></p>

    <input type="submit" value="Add Product">
  </form>
</body>
</html>
