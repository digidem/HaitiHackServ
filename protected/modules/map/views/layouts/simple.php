<?php /* @var $this Controller */ ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <?php echo $this->renderPartial('//layouts/_stylesheets'); ?>
</head>
<body>
  <?php echo $this->renderPartial('//layouts/_header') ?>

  <?php echo $content; ?>

  <div id="footer">
    Copyright &copy; <?php echo date('Y'); ?> KOFAVIV<br/>
    All Rights Reserved.<br/>
  </div>
</body>
</html>
