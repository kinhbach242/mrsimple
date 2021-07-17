<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>


    <div class="right__table">
        <h3 class="right__tableTitle">Danh sách nhóm sản phẩm</h3>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID Nhóm sản phẩm</th>
                            <th>Tên nhóm sản phẩm</th>
                            <th>Xóa </th>
                            <th>Sửa</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?php echo $value->idGroupProduct ?></td>
                                <td><?php echo $value->nameGroupProduct ?></td>
                                <td class="text-center">                                  
                                <a href="?act=groupproduct&delete=<?PHP echo $value->idGroupProduct ?>" class="btn-edit">Xóa</a>                         
                                </td>
                                <td>
                                <a  href="?act=groupproduct&edit=<?PHP echo $value->idGroupProduct ?>" class="btn-edit">Sửa</a>
                                </td>
                            </tr>
                        <?php }
                    } else { ?>
                        <h1> Hiện không có dữ liệu trong bảng</h1>



                    <?PHP } ?>
                    </tbody>
                </table>
        </div>
    </div>
    </div>
</body>

</html>