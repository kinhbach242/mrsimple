<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <title>Document</title>
</head>

<body>

    <div class="chart-container">
        <canvas id="myChart" width="400" height="250" style="padding: 2rem 0;"></canvas>
    </div>
       <div class="right__table">
        <p class="right__tableTitle">SỐ LƯỢNG BÁN <= 10 SẢN PHẨM</p>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
               <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID Sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>ID Sản phẩm chi tiết</th>
                            <th>Số lượng</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php  
                        $i = 1;                     
                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?PHP echo $i++ ?></td>
                                <td><?php echo $value->idProduct ?></td>
                                <td class="nameProduct"><?php echo $value->nameProduct ?></td>
                                <td><?php echo $value->idProductDetail ?></td>
                                <td class="quantity"><?php echo $value->quantity?></td>
                            </tr>
                        <?php }
                    } else { ?>
                        <h1> Không có số liệu </h1>



                    <?PHP } ?>
                    </tbody>
                </table>
        </div>
        <!-- <a href="?act=products" class="right__tableMore">
            <p>Xem tất cả các sản phẩm</p> <img src="../public/assets/arrow-right-black.svg" alt="">
        </a> -->
    </div>
     
    </div>
    <div class="right__content" style="padding-top: 0; padding-bottom: 0;">
     <h3 class="pdf-name">File PDF</h3>
     <button style="padding:5px;background:#ff9438" id="btn" type="button" class="open-pdf" data-pdf="source">Print</button>
    </div>
     
    <script>
        const nameProductEl = document.querySelectorAll(".nameProduct");
        const quantity = document.querySelectorAll(".quantity");
        const list_name = [];
        const  quantity_list = [];
        nameProductEl.forEach(item => {
            list_name.push(item.innerText)
        })
        quantity.forEach(item => {
            quantity_list.push(item.innerText)
        })
    </script>
    <script>
var ctx = document.getElementById('myChart').getContext('2d');
      ctx.canvas.parentNode.style.width = '75%';
      ctx.canvas.parentNode.style.height = '70%';
var myChart = new Chart(ctx, {
    // type: 'bar',
    type: "doughnut",
    data: {
        labels: list_name,
        // labels: ['GIANT DAMIER WAVES DENIM JACKET', 'CLOUD PRINT T-SHIRT', 'TAMBOUR SLIM MONOGRAM', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: 'Bảng Thống Kê Doanh Thu',
            data: quantity_list,
            // data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
 const btn = document.querySelector("#btn");
        btn.addEventListener('click', () => {
            const leftEl = document.querySelector(".left");
            const right__cards = document.querySelector(".right__cards");
            leftEl.style.display = "none";
            right__cards.style.display = "none";
            ctx.canvas.parentNode.style.height = '40%';
    ctx.canvas.parentNode.style.width = '60%';
            if(navigator.userAgent.toLowerCase().indexOf('chrome') > -1){ 
                window.PPClose = false;                                    
                window.onbeforeunload = function(){                         
                    if(window.PPClose === false){                          
                        return 'Leaving this page will block the parent window!\nPlease select "Stay on this Page option" and use the\nCancel button instead to close the Print Preview Window.\n';
                    }
                }                   
                window.print();                                           
                window.PPClose = true;   
                location.reload()

            }
        })
</script>
</body>

</html>