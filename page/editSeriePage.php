<?php
include '../component/sidebar.php';

include '../process/editSerieProcess.php'
?>

<?php

$row = showSelectedSerie($_GET["id"]);

if (isset($_POST["edit"])) {

    $result = editData($_POST, $_GET["id"]);

    if ($result > 0) {
        echo
            '<script>
                alert("Berhasil ubah data"); window.location = "../page/listSeriesPage.php"
            </script>';
    } else {
        echo
            '<script>
                alert("Gagal ubah data"); window.location = "../page/listSeriesPage.php"
            </script>';
    }
}
?>


<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4>EDIT SERIE</h4>
        <button style="background-color:red">
            <a href="./listSeriesPage.php">KEMBALI</a></button>
    </div>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="name">name: </label></td>
                <td><input type="text" name="name" id="name" value="<?=$row["name"]?>"></td>
            </tr>
            <tr>
                <td><label for="genre">genre: </label></td>
                <td><select name="genre[]" id="genre" class="form-select" multiple aria-label="multiple select example"
                        multiple>
                        <option value="action"
                            <?php echo str_contains($row["genre"], "action") ? 'selected = "selected"' : ''; ?>>
                            action</option>
                        <option value="romance"
                            <?php echo str_contains($row["genre"], "romance") ? 'selected = "selected"' : ''; ?>>romance
                        </option>
                        <option value="fiksi"
                            <?php echo str_contains($row["genre"], "fiksi") ? 'selected = "selected"' : ''; ?>>fiksi
                        </option>
                    </select></td>
            </tr>
            <tr>
                <td><label for="realese">realese: </label></td>
                <td><input type="text" name="realese" id="realese" value="<?=$row["realese"]?>"></td>
            </tr>
            <tr>
                <td><label for="episode">episode: </label></td>
                <td><input type="text" name="episode" id="episode" value="<?=$row["episode"]?>"></td>
            </tr>
            <tr>
                <td><label for="season">season: </label></td>
                <td><input type="text" name="season" id="season" value="<?=$row["season"]?>"></td>
            </tr>
            <tr>
                <td><label for="synopsis">synopsis: </label></td>
                <td><input type="text" name="synopsis" id="synopsis" value="<?=$row["synopsis"]?>"></td>
            </tr>
            <tr>

                <td><button type="submit" name="edit">EDIT</button></td>
            </tr>
        </table>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>