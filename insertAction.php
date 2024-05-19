<button onclick="back()" style="margin-bottom: 5px">back</button><br>
<script>
    function back() {
        window.location.href = "index.php";
    }
</script>
<?php
    require_once "db.php";

    $name = "'".(string)$_POST["name"]."'";
    $gender = "'".(string)$_POST["gender"]."'";
    $email = "'".(string)$_POST["email"]."'";

    $sql = "INSERT INTO `student`(`name`, `gender`, `email`)VALUES(".$name.", ".$gender.", ".$email.")";

    $result = mysqli_query($link, $sql);
    if(mysqli_affected_rows($link) > 0){
        // 如果有一筆以上代表有更新
        // mysqli_insert_id可以抓到第一筆的id
        $new_id= mysqli_insert_id ($link);
        echo "新增後的id為 {$new_id}";
    }else if(mysqli_affected_rows($link) == 0){
        echo "無資料新增";
    }else{
        echo "mysql 執行語法失敗".mysqli_error($link);
    }

    mysqli_close($link);
?>
