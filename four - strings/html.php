<?php

$nome = 'cam" /> <script>alert("teste");</script>';
?>
<!-- converter qualquer coisa em codigo html, para nao permitir injeção de codigo -->
<input type="text" name="<?php echo htmlspecialchars($nome); ?>" />