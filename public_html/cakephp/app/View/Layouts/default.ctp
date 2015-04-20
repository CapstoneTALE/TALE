<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>





<!-- Bootstrap Default Cakephp Layout -->

<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $this->Html->charset(); ?>
  <title><?php echo $title_for_layout; ?></title>
  <!--  meta info -->


  <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- styles -->
  <?php
    echo $this->Html->css('bootstrap');
    echo $this->Html->css('bootstrap-responsive');
    echo $this->Html->css('docs');
    echo $this->Html->css('prettify');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('font-awesome.min');
    echo $this->Html->css('animate.min');
    echo $this->Html->css('prettyPhoto');
    echo $this->Html->css('main');
    echo $this->Html->css('responsive');
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
  ?>
  <!-- icons -->
  <?php
    echo  $this->Html->meta('icon',$this->webroot.'img/favicon.ico');
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
      'href'=>$this->webroot.'img/apple-touch-icon.png'));
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
      'href'=>$this->webroot.'img/apple-touch-icon.png',  'sizes'=>'72x72'));
    echo $this->Html->meta(array('rel' => 'apple-touch-icon',
      'href'=>$this->webroot.'img/apple-touch-icon.png',  'sizes'=>'114x114'));
  ?>
  <!-- page specific scripts -->
    <?php echo $scripts_for_layout; ?>
</head>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
  <div id="container">
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
  <div id="row">
  </div>
  </div>
  <?php //echo $this->element('sql_dump'); ?>
</body>
</html>
