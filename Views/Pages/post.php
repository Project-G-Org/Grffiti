<?php
    use Models\UserModel;

    $userModel = new UserModel(new MySql);
?>

<main>
    <?php foreach ($userModel -> getData() as $key => $row): ?>
        <ul>
            <li><?php echo $row['username'] ?></li>
            <li><?php echo $row['password'] ?></li>
            <li><?php echo $row['description'] ?></li>
            <li><?php echo $row['position'] ?></li>

            <?php 
                $imgName = pathinfo($row['profile_pic'], PATHINFO_FILENAME);
            ?>

            <?php if (preg_match('~[^\x20-\x7E\t\r\n]~', $imgName) > 0): ?>
                <img src="data:image/jpg;base64,<?php echo base64_encode($row['profile_pic']) ?>">
            <?php else: ?>
                <img src="<?php echo INCLUDE_PATH ?>Assets/<?php echo $row['profile_pic'] ?>.png">
            <?php endif ?>
        </ul>

        <hr>
    <?php endforeach ?>
</main>