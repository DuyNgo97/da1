<?php
if (isset($data["arrEd"])) {
    $arr = json_decode($data["arrEd"]);
    // var_dump($data["arrUs"]);
}

?>


<h1>
    Đổi email
</h1>
<form action="account/UpdateEmail" target="account.php" method="post">
    <label for="psw"><b>Email</b></label>
    <input type="email" name="email" value="">

    <?php if (isset($data["check"])) {
        echo '<h1> update thanh cong <h1>';
    } ?>

    <div class="clearfix">
        <button type="submit" name="submit" class="submit">Sửa</button>
    </div>
</form>