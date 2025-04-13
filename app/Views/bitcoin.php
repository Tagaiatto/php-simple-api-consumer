<?php ob_start(); ?>

<h1>Bitcoin Price</h1>
<form method="get" action="/bitcoin">
    <button type="submit" name="fetch" class="btn btn-primary">Get Current BTC Price</button>
</form>

<?php if ($price): ?>
    <div class="alert alert-success mt-4">
        Current BTC price (USD): <strong>$<?= htmlspecialchars($price) ?></strong>
    </div>
<?php endif; ?>

<?php
$content = ob_get_clean();
include 'layout.php';