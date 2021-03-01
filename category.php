<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="RGB" >
    <title>Category</title>
</head>
<body>
<div class="navbar">

        <span>
            <h1 style="background-color: chocolate;" > Kategori oluştur</h1>
        </span>
        <?php
        if ($_POST) {
            if (!empty($_POST['name'])) {

                include 'database.php';
                $value = $_POST['name'];
                $data = $pdo->query("SELECT * FROM categories WHERE name='{$value}'")->fetch();
                if (!$data) {
                    try {
                        $query = "INSERT INTO categories SET id=:id, name=:name";
                        $stmt = $pdo->prepare($query);

                        $id = uniqid($prefix = "", $more_entropy = false);
                        $name = htmlspecialchars(strip_tags($_POST['name']));

                        $stmt->bindParam(':id', $id);
                        $stmt->bindParam(':name', $name);
                    } catch (PDOException $exception) {
                        die('ERROR: ' . $exception->getMessage());
                    }
                } else {
                    echo "<div class='alert alert-danger'>Mevcut! Başka bir isim deneyin.</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>Lütfen isim giriniz.</div>";
            }
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div style=width:800px; margin:0 auto;>
            <table class='table'>
                <tr>
                    <td style="background: lightcoral;" >Kategori İsmi</td>
                    <td><input type='text' name='name' class='form-control' /></td>
                </tr>
                <td> <br>
                    <input type='submit' value='Kaydet' class='btn btn-primary' />
                    <td></td>
                    <a href='index.php' class='btn btn-danger' style="color: maroon;" >Ürünler sayfasına dön</a>
                    <td></td>
                </td>
                </tr>
            </table>
            </div>
        </form>

</body>
    
</body>
</html>