<button onclick="back()" style="margin-bottom: 5px">back</button><br>
<script>
    function back() {
        window.location.href = "index.php";
    }
</script>
<?php
    require_once "db.php";

    $id = (int)$_POST["id"];
    $sql = "DELETE FROM `student` WHERE `id` = ".$id;

    $result = mysqli_query($link, $sql);
    if(mysqli_affected_rows($link) > 0){
        echo "資料成功刪除";
    }else if(mysqli_affected_rows($link) == 0){
        echo "無資料新增";
    }else{
        echo "mysql 執行語法失敗".mysqli_error($link);
    }

    mysqli_close($link);
?>
