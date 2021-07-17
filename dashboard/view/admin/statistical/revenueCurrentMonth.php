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
        <canvas id="myChart" width="400" height="250"></canvas>
    </div>
    
    <div class="right__table">
        <p class="right__tableTitle">Doanh thu trong tháng <script> var d = new Date(); document.write( d.getMonth() ) </script> </p>
        <div class="right__tableWrapper">
            <?PHP
            if (!empty($data)) {
            ?>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ngày</th>
                            <th>Tổng thu</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 1;
                        $total = 0;
                        foreach ($data as $value) {         ?>
                            <tr>
                                <td><?php echo $i++?></td>
                                <td class="date"><?php echo $value->date ?></td>
                                <td class="totalDay"><?php echo $value->totalDay?></td>
                                <?PHP $total += $value->totalDay ?>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Tổng doanh thu tháng : <?PHP echo $total ?></td>
                        </tr>
                        
                   <?PHP } else { ?>
                        <h1> Không có số liệu </h1>



                    <?PHP } ?>
                    </tbody>
                </table>
        </div>
    </div>
    </div>
   <div class="right__content" style="padding-top: 0; padding-bottom: 0;">
     <h3 class="pdf-name">Some PDF Name</h3>
     <button style="padding:5px;background:#ff9438" id="btn" type="button" class="open-pdf" data-pdf="source">Print</button>
    </div>
    <script>
        const totalDay = document.querySelectorAll(".totalDay");
        const dateEl = document.querySelectorAll(".date");
        const list_item = [];
        const date_list = [];
        totalDay.forEach(item => {
            list_item.push(item.innerText)
        })
        dateEl.forEach(item => {
            date_list.push(item.innerText)
        })
    </script>
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
     ctx.canvas.parentNode.style.width = '80%';
      ctx.canvas.parentNode.style.height = '60%';
    var myChart = new Chart(ctx, {
        // type: 'bar',
        type: "bar",
        data: {
            labels: date_list,
            datasets: [{
                data: list_item,
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)',
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            title: {
                text: "Bảng Thống Kê Doanh Thu",
                display: true,
            },
            legend: {
                display: false,
            }
        }
    });
       const btn = document.querySelector("#btn");
        btn.addEventListener('click', () => {
            const leftEl = document.querySelector(".left");
            const right__cards = document.querySelector(".right__cards");
            leftEl.style.display = "none";
            right__cards.style.display = "none";
              
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