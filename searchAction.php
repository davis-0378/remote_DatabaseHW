<button onclick="back()">back</button>
<script>
    function back() {
        window.location.href = "index.php";
    }
</script>

<?php
    require_once "db.php";

    if($_POST["id"] != "All" && $_POST["id"] != "all") {
        $id = (string) $_POST["id"];
        $sql = "SELECT * FROM `student` WHERE `id` = ".$id;
        $result = mysqli_query($link, $sql);
    }else {
        $sql = "SELECT * FROM `student`";
        $result = mysqli_query($link, $sql);
    }

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br> id : ". $row["Id"]. " - Name : ". $row["Name"]. " - Gender : " . $row["Gender"] . " - Email : " . $row["Email"];
        }
    } else {
        echo "0 results";
    }
?>
