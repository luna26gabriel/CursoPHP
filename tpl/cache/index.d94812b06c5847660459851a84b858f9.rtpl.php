<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>Hello Word, <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
<p>Testando o Template com Email</p>
<p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>