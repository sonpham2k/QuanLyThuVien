<!DOCTYPE html>
<?php
    session_start();
    // include('connect.php'); 
?>
<html>
<head>
    <title>Trả sách</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../web/css/device/givebackDevice.css" />
</head>
<body>
<form method="post">
        
        <div class="css">
            <label class="text">Thiết bị</label>
            <input class="input" type="text" name="Equipment">
        </div>
        
        <div class="css">
            <label class="text">Giáo viên</label>
            <select class="combobox" name="teacher">
                <option> </option>
                <option> Phạm Ngọc Sơn </option>
                <option> Phạm Thế Anh</option>
                <option> Phạm Thái Duy </option>     
            </select>
        </div>

        <div class="css">
            <label class="text">Lớp học</label>
            <select class="combobox" name="class">
                <option> </option>
                <option> Máy tính và Khoa học thông tin </option>
                <option> Toán tin</option>
                <option> Khoa học vật liệu </option>     
                
            </select>
        </div>

        <input type="submit" name="login" value="Tìm kiếm" style="cursor:pointer" class="search"> 

        <div class="count">
            Số thiết bị tìm thấy: XXX
        </div>
        
        <table class="tbl" >
                <tr>
                    <th style="width: 40px"> No</td>
                    <th> Tên hiển thị</td>
                    <th> Trạng thái</td>
                    <th> Action </td>
                </tr>
                
                <tr>
                    <td style="width: 40px"> 1</td>
                    <td> Máy chiếu</td>
                    <td> Đang mượn</td>
                    <td> <input type="submit" name="login" value="Trả" style="cursor:pointer" class="pay"> </td>
                </tr>
                
                <tr>
                    <td style="width: 40px"> 2</td>
                    <td> Laptop1</td>
                    <td> Đang mượn</td>
                    <td> <input type="submit" name="login" value="Trả" style="cursor:pointer" class="pay"> </td>
                </tr>
                
                <tr>
                    <td style="width: 40px"> 3</td>
                    <td> Laptop2</td>
                    <td> Đang mượn</td>
                    <td> <input type="submit" name="login" value="Trả" style="cursor:pointer" class="pay"> </td>
                </tr>
                
            </table>

        </form> 
           
        
    
</body>
</html>