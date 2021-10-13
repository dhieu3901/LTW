<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sửa tài liệu nội bộ</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            $ket_noi = mysqli_connect("localhost","root","","22a4040135");

            $tai_lieu_noi_bo_id = $_POST["txtID"];
            $ten_tai_lieu = $_POST["txtTailieu"];
            $ngay_ban_hanh = $_POST["txtNgaybanhanh"];
            $link_tai_ve = $_POST["txtLinktaive"];        
            $ghi_chu = $_POST["txtGhichu"];
                             
            $sql = "UPDATE `tbl_tai_lieu_noi_bo` 
            SET `phong_ban_id` = '3', `ten_tai_lieu` = '".$ten_tai_lieu."', `ngay_ban_hanh` = '".$ngay_ban_hanh."', `link_tai_ve` = '".$link_tai_ve."', `ghi_chu` = '".$ghi_chu."' 
            WHERE `tbl_tai_lieu_noi_bo`.`tai_lieu_noi_bo_id` = '".$tai_lieu_noi_bo_id."';
            ";
            
            $noi_dung_tai_lieu_noi_bo = mysqli_query($ket_noi,$sql);

            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã sửa tài liệu nội bộ thành công');
                    window.location.href='quan_tri_tai_lieu_noi_bo.php'
                </script>
            ";

        ;?>
    </body>    
</html>
