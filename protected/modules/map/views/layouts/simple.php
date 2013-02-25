<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <meta name="viewport" content="width=device-width">
  <?php echo $this->renderPartial('//layouts/_stylesheets'); ?>
</head>
<body>
  <?php echo $this->renderPartial('//layouts/_header') ?>

  <?php echo $content; ?>
</body>
</html>
