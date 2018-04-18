<?php
    print_r($_FILES);
  move_uploaded_file($_FILES ['checkbox']['tmp_name'],'./upload1/'.$_FILES['checkbox']['name'])

    ?>