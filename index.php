<div style="padding: 10px">
    <div style="padding-bottom: 10px">
        <a>請選擇要操作資料庫的方式 : </a>
    </div>
    <div style="padding-bottom: 10px" id="selectPanel">
        <input type="button" style="padding-right: 5px" value="insert" onclick="insertAction()">
        <input type="button" style="padding-right: 5px" value="delete" onclick="deleteAction()">
        <input type="button" style="padding-right: 5px" value="update" onclick="updateAction()">
        <input type="button" style="padding-right: 5px" value="search" onclick="searchAction()">
    </div>

    <div id="insertPanel" class="panel" style="display: none">
        <div  style="margin-bottom: 5px">
            <a style="margin-bottom: 5px">輸入格式為[name] [gender] [email],範例 : [davis] [male] [davis0000@gmail.com]</a>
        </div>
        <form action="insertAction.php" method="post">
            <input type="text" name="name" style="width: 40px">
            <input type="text" name="gender" style="width: 40px">
            <input type="email" name="email" style="width: 160px">
            <input type="submit" value="enter">
        </form>
    </div>

    <div id="deletePanel" class="panel" style="display: none">
        <div  style="margin-bottom: 5px">
            <a>輸入想刪除資料的id，範例 : [1]</a>
        </div>
        <form action="deleteAction.php" method="post">
            <input type="text" name="id" style="width: 40px">
        </form>
    </div>

    <div id="updatePanel" class="panel" style="display: none">
        <div  style="margin-bottom: 5px">
            <a>輸入想更新資料的id以及要輸入新的Email，範例 : [1][davis1111@gmail.com]</a>
        </div>
        <form action="updateAction.php" method="post">
            <input type="text" name="id" style="width: 40px">
            <input type="text" name="name" style="width: 40px">
            <input type="email" name="email" style="width: 160px">
            <input type="submit" value="enter">
        </form>
    </div>

    <div id="searchPanel" class="panel" style="display: none">
        <div  style="margin-bottom: 5px">
            <a>輸入想知道資料的id或是輸入 All</a>
        </div>
        <form action="searchAction.php" method="post">
            <input type="text" name="id" style="width: 40px">
        </form>
    </div>
</div>
<script>
    const panelClass = document.querySelectorAll(".panel");

    function hideAll() {
        panelClass[0].style.display = "none";
        panelClass[1].style.display = "none";
        panelClass[2].style.display = "none";
        panelClass[3].style.display = "none";
    }

    function insertAction() {
        const insertPanel = document.getElementById("insertPanel");

        hideAll()
        insertPanel.style.display = "block";
    }

    function deleteAction() {
        const deletePanel = document.getElementById("deletePanel");

        hideAll()
        deletePanel.style.display = "block";
    }

    function updateAction() {
        const updatePanel = document.getElementById("updatePanel");

        hideAll()
        updatePanel.style.display = "block";
    }

    function searchAction() {
        const searchPanel = document.getElementById("searchPanel");

        hideAll()
        searchPanel.style.display = "block";
    }
</script>