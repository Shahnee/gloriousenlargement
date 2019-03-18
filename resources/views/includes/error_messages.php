<?php if ($errors->any()) { ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors->all() as $error) { ?>
                <li><?= $error ?></li>
            <?php }
            ?>
        </ul>
    </div>
    <?php
}
if (Session::has('error')) {
    ?>
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
        <?php echo Session::get('error') ?>
    </div>
<?php } if (Session::has('success')) {
    ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
        <?php echo Session::get('success') ?>
    </div>
<?php } ?>