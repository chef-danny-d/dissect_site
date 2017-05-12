<?php
if (isset($_POST['submit'])){
    $file = $_FILES['file'];//gets the file
    $fileName = $file['name'];//gets the name
    $fileTmpName = $file['tmp_name'];//gets temporary location
    $fileSize = $file['size'];//gets file size
    $fileError = $file['error'];//gets error record from the array
    $fileType = $file['type'];//gets the extension of the file type

    $fileExt = explode('.', $fileName);//explodes the file name and checks the ext of it
    $fileActualExt = strtolower(end($fileExt)) ;//checks the actual ext of the file

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');//these file types are allowed

    if(in_array($fileActualExt, $allowed)){//checks if file extension is allowed in the array above
        if ($fileError === 0){//checks if file can be uploaded
            if ($fileSize < 1000000) {//checks if the file size is smaller to what is allowed
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;//adds new name to the file with
                $fileDestination = 'upload/' . $fileNameNew;//specifies the location to put it to
                                                            //needs fixing since this way every user has the same folder and could possibly see each other's files
                move_uploaded_file($fileTmpName, $fileDestination);//moves the file from tmp location to the above location
                //need to include file splitting somewhere here
            }
            else{
                echo "Your file is too large." ;//error handling
            }
        }
        else{
            echo "There was an error uploading your file." ;//error handling
        }
    }
    else{
        echo "You can't upload files of this type." ;//error handling
    }
}
