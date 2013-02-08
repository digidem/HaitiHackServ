<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="menu-top">
		<?php $this->widget('zii.widgets.CMenu',array(
                        'activeCssClass'=>'active',
                        'activateParents'=>true,
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                                array('label'=>'Organisation', 'url'=>array('/organisation/index'),
                                'linkOptions'=>array('id'=>'menuOrganisation'),
                                'itemOptions'=>array('id'=>'itemOrganisation'),
                                     
                                'items'=>array(
                                      array('label'=>'Organisation branch','url'=>array('/branchsite/index')),
                                      array('label'=>'Partners', 'url'=>array('partners/index')),
                                      array('label'=>'Contact', 'url'=>array('contact/index')),  
                                      array('label'=>'Category','url'=>array('category/index')),
                                      array('label'=>'Services','url'=>array('services/index')),
                                     array('label'=>'service price','url'=>array('sitePrice/index')),
                                         ),
                                'visible'=>!Yii::app()->user->isGuest),
                                array('label'=>'Geographic area', 'url'=>array('#'),
                                'linkOptions'=>array('id'=>'menuGeographic'),
                                'itemOptions'=>array('id'=>'itemgeographique'),
                                     
                                'items'=>array(
                                      array('label'=>'Department','url'=>array('/departement/index')),
                                      array('label'=>'Commune', 'url'=>array('commune/index')),
                                      array('label'=>'Quartier','url'=>array('quartier/index')),
                                      
                                         ),
                                'visible'=>!Yii::app()->user->isGuest),
                                
                                array('label'=>'Administration', 'url'=>array('#'),
                                'linkOptions'=>array('id'=>'menuAdmin'),
                                'itemOptions'=>array('id'=>'itemAdmin'),
                                     
                                'items'=>array(
                                      array('label'=>'Create user','url'=>array('/users/create')),
                                      
                                      
                                         ),
                                'visible'=>!Yii::app()->user->isGuest),
                            
    
                               // array('label'=>'Organisation Branch', 'url'=>array('/branchsite/index'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
        
        <!-- mainmenu -->
        <div id="">
            <?php echo "<br/><br/>" ?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>
        </div> 
        
	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> KOFAVIV<br/>
		All Rights Reserved.<br/>
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
