<?php
$in = $_POST['input'] ?? '';
$out = '';
if (isset($_POST['encode'])) $out = base64_encode($in);
if (isset($_POST['decode'])) $out = base64_decode($in);
?>
<form method="post">
    <textarea name="input" rows="6" cols="60"><?= htmlspecialchars($in) ?></textarea><br>
    <button name="encode">Encode</button>
    <button name="decode">Decode</button>
</form>
<textarea rows="6" cols="60" readonly><?= htmlspecialchars($out) ?></textarea>