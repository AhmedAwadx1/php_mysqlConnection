<?php
if (isset($_SESSION['errors'])) {
    foreach ($_SESSION['errors'] as $error) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fa-solid fa-triangle-exclamation"></i>
            <strong>Error:</strong> <?php echo $error; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php }
    unset($_SESSION['errors']);
}
?>



