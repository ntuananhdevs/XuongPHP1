<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Tạo ra 1 khu vực code php -->
    <?php
    // 1.Cách khai báo biến $ + tên biến = giá trị;
    $a = 10;
    // 2. Kiểu dữ liệu trong php
    // int (số)
    $x = 10;
    // float (số thập phân)
    $y = 1.2;
    // string (chuỗi)
    $z = "Hello";
    // array (mảng)
    $listProduct = ["iphone", "samsung", "xiaomi"];
    // object (đối tượng) học sau
    // boolean (đội)
    $isShow = true;
    // 7. null (trống)

    $listUser = [
        [
            "id" => 1,
            "name" => "Huy",
            "age" => 20,
            "address" => "Ha Noi",
            "avatar" => "avatar.jpg"
        ],
        [
            "id" => 2,
            "name" => "Hien",
            "age" => 25,
            "address" => "Vinh Phuc",
            "avatar" => "avatar.jpg"
        ],
        [
            "id" => 3,
            "name" => "Thuy",
            "age" => 18,
            "address" => "TP HCM",
            "avatar" => "avatar.jpg"
        ]
    ];
    // Su dung foreach in ra tất cả các giá trị người dùng trong mảng.

    ?>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>address</th>
                <th>avatar</th>
            </tr>

        </thead>
        <tbody>
            <?php

            // echo " <h3>Cách 1</h3>";

            // foreach ($listUser as $user) {
            //     echo "<tr>";
            //     foreach ($user as  $value) {
            //         echo "<td>$value</td>";
            //     };
            //     echo "</tr>";
            // }

            // // echo " <h3>Cách 2</h3>";

            foreach ($listUser as $user) {
                echo "<tr>";
                echo "<td>" . $user["id"] . "</td>";
                echo "<td>" . $user["name"] . "</td>";
                echo "<td>" . $user["age"] . "</td>";
                echo "<td>" . $user["address"] . "</td>";
                echo "<td>" . $user["avatar"] . "</td>";
                echo "</tr>";
            }

            echo " <h3>Cách 3</h3>";
            foreach ($listUser as $user) {
                echo "<tr>
                 <td>$user[id]</td>
                 <td>$user[name]</td>
                 <td>$user[age]</td>
                 <td>$user[address]</td>
                 <td>$user[avatar]</td>
                </tr>";
            }
            ?>
        </tbody>
    </table>

    <h3> Cách 4</h3>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
                <th>address</th>
                <th>avatar</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($listUser as $user) : ?>
            <tr>
                <td><?= $user["id"] ?></td>
                <td><?= $user["name"] ?></td>
                <td><?= $user["age"] ?></td>
                <td><?= $user["address"] ?></td>
                <td> <img src="../../../public/assets/avatar/<?= $user["avatar"] ?>" width="100" height="100" alt="">
                </td>
            </tr>
            <?php endforeach; ?>


        </tbody>
    </table>

</body>

</html>