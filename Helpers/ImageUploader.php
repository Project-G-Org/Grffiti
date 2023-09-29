<?php

namespace Helpers;

use Exception;

class ImageUploader {
    private static array $validImageTypes = [
        '.jpg', '.png', '.jpeg' , '.webp'
    ];

    public static function receiveUserImageFromPost(string $inputName): string {
        $targetDir = 'Assets/Temp';
        $target_file = $targetDir . basename($_FILES[$inputName]["name"]);
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

        if (in_array($imageFileType, self::$validImageTypes)) {
            throw new Exception('Not a image file');
        }

        if ($_FILES[$inputName]["size"] > 500000) {
            throw new Exception('File too large');
        }

        if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $target_file)) {
            echo "The file ". basename($_FILES[$inputName]["name"]) . " has been uploaded.";
        } else {
            throw new Exception('Sorry, there was an error uploading your file.');
        }
        
        return basename($_FILES["profile_pic"]["name"], $imageFileType);
    }
}