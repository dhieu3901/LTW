<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charshet="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>tài liệu nội bộ thêm mới</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php
            $ket_noi = mysqli_connect("localhost","root","","22a4040135");

            $ten_tai_lieu = $_POST["txtTailieu"];
            $ngay_ban_hanh = $_POST["txtNgaybanhanh"];
            $link_tai_ve = $_POST["txtLinktaive"];
            $ghi_chu = $_POST["txtGhichu"];
            $phong_ban_id = $_POST["txtPhongbanid"];

            $sql = "INSERT INTO `tbl_tai_lieu_noi_bo` (`tai_lieu_noi_bo_id`, `phong_ban_id`, `ten_tai_lieu`, `ngay_ban_hanh`, `link_tai_ve`, `ghi_chu`) 
            VALUES (NULL, '".$phong_ban_id."', '".$ten_tai_lieu."', '".$ngay_ban_hanh."', '".$link_tai_ve."', '".$ghi_chu."');
            ";

            
            

            $noi_dung_tai_lieu = mysqli_query($ket_noi,$sql);

            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã thêm mới tài liệu nội bộ thành công');
                    window.location.href='quan_tri_tai_lieu_noi_bo.php'
                </script>
            ";

            
        ;?>
    </body>    
</html>
