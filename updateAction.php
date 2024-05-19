<button onclick="back()" style="margin-bottom: 5px">back</button><br>
<script>
    function back() {
        window.location.href = "index.php";
    }
</script>
<?php
    require_once "db.php";

    $id = (int)$_POST["id"];
    $name = "'".(string)$_POST["name"]."'";
    $email = "'".(string)$_POST["email"]."'";
    $sql = "UPDATE `student` SET `name`=".$name.",`email`=".$email." WHERE `id` = ".$id;

    $result = mysqli_query($link, $sql);
    if(mysqli_affected_rows($link) > 0){
        echo "資料已更新";
    }else if(mysqli_affected_rows($link) == 0){
        echo "無資料新增";
    }else{
        echo "mysql 執行語法失敗".mysqli_error($link);
    }

    mysqli_close($link);
?>
