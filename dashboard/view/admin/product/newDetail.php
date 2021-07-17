<!DOCTYPE html>
<html lang="en">

<head>
    <title> Thêm Sản phẩm mới</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2> Set chi tiết cho sản phẩm </h2>
<br><br><br>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Name Product : </label>
                  <span><?PHP echo $data_prd->nameProduct ?></span>  
            </div>
            <div class="form-group">
                <label>Color : </label>
                <input type="text" name="color" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Size : </label> 
               <input type="text" name="size" class="form-control">
            </div>
            <div class="form-group">
                <label>Price : </label> 
                <input type="text" name="price" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label>Old Price : </label> 
                <input type="text" name="oldPrice" class="form-control" required value="">
            </div>
            <div class="form-group">
                <label>Image Url : </label>
                <input type="file" name="imgUrl" required value="">
            </div>
            <div class="form-group">
                <label>Quantity </label> 
                <input type="text" name="quantity" class="form-control" required value="">
            </div>

            <input name="update" type="submit" value="Thêm" class="btn-submit">
        </form>

    </div>

</body>

</html>