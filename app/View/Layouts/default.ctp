<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$pDescription = __d('cake_dev', 'I am a Byte Chef -  Mixing up a dish of HTML, CSS, Jquery, PHP with colors.');
$paboutme = __d('cake_dev', 'Hello, I am Praveen');
$pdefinition = __d('cake_dev', 'I am a Byte Chef. <a href="http://en.wikipedia.org/wiki/Byte" target="_blank">Byte</a> <a href="http://en.wikipedia.org/wiki/Chef" target="_blank">Chef</a> - is who cooks Amazing Bytes.');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $pDescription ?>:
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('css/bootstrap_min');
		echo $this->Html->css('css/styles');
		echo $this->Html->css('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="container">
		<div class="header">
			<h1><?php echo $paboutme; ?></h1>
		</div>
		<div class="definition">
			<blockquote><?php echo $pdefinition; ?></blockquote>
		</div>
		<div class="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
</html>
