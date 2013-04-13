<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="language" content="en" />
  <?php echo $this->renderPartial('//layouts/_stylesheets'); ?>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

  <?php echo $this->renderPartial('//layouts/_header') ?>

  <div>
    <br/><br/>

    <?php if(isset($this->breadcrumbs)):?>
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
        'links'=>$this->breadcrumbs,
      )); ?><!-- breadcrumbs -->
    <?php endif ?>

    <?php echo $content; ?>
  </div>

  <div class="clear"></div>

  <div id="footer">
    Copyright &copy; 2013 KOFAVIV<br/>
    All Rights Reserved.<br/>

  </div>

</div>

</body>
</html>
