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
        <h3 class="right__tableTitle">Danh sách bình luận</h3>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID Comment</th>
                            <th>id User</th>
                            <th>Content</th>
                            <th>Status</th>
                            <th>idProduct</th>
                            <th>Xoá</th>
                            <th>Confirm</th>

                            


                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?php echo $value->idComment?></td>
                                <td><?php echo $value->idUser?></td>
                                <td><?php echo $value->content?></td>
                                <td><?php echo $value->status?></td>
                                <td><?php echo $value->idProduct?></td>                          

                                <td class="text-center">                                  
                                <a href="?act=comment&delete=<?PHP echo $value->idComment ?>" class="btn-edit">Del</a>                     
                                </td>
                                <td class="text-center">                                  
                                <a href="?act=comment&confirm=<?PHP echo $value->idComment ?>"class="btn-edit">Confirm</a>                         
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