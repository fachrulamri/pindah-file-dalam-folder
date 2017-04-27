<!DOCTYPE html>
<html>
<body>
<?php
	$count = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
        if (strlen($_FILES['files']['name'][$i]) > 1) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], 'gambar/'.$name)) {
                $count++;
            }
        }
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
    <input class="button" type="submit" value="Upload" />
    <div class="ui container segment align bottom" style="background-color: #000;color: white">
    <center><p>Fachrul Amri Firmansyah (15650027)</p></center>
  </div>
</form>

</body>
</html> 