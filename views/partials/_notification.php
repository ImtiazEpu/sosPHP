<?php if (!empty( $_SESSION[ 'error' ] )): ?>
    <div class="alert alert-warning px-5">
        <?php foreach ($_SESSION[ 'error' ] as $errors): ?>
            <li><?php echo $errors; ?></li>
        <?php endforeach; ?>
    </div>
<?php unset($_SESSION[ 'error' ])?>
<?php endif; ?>

        <?php if (isset($_SESSION[ 'success' ])):?>
    <div class="alert alert-success">
        <?php echo $_SESSION[ 'success' ];?>
    </div>
    <?php unset($_SESSION[ 'success' ])?>
<?php endif;?>