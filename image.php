<?php
$response = [];
if (!empty($_FILES) && count($_FILES) === 1) {
    foreach($_FILES as $key => $img) {
        $name = $img['name'];
        $type = explode('/', $img['type'])[0];

        $extension = explode('.', $name);
        $extension = $extension[count($extension) - 1];

        if (in_array($extension, ['jpg', 'png', 'jpeg', 'gif']) && $type === 'image') {
            $destination_path = getcwd() . DIRECTORY_SEPARATOR . '/uploads/';
            $name = basename(md5($name . time())) . ".{$extension}";
            $target_path = $destination_path . $name;

            move_uploaded_file($img['tmp_name'], $target_path);

            $response['location'] = "/uploads/{$name}";
        } else {
            exit("Image type is invalid");
        }
    }
}

echo json_encode($response);