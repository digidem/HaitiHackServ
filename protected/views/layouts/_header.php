<div id="header">
	<div id="logo">
		<a href="/">
			<?php echo CHtml::encode(Yii::app()->name); ?>
		</a>
	</div>
</div>

<div id="menu-top">
<?php $this->widget('zii.widgets.CMenu', array(
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

        array('label'=>'Map', 'url'=>array('/map/default/index'),
        'visible'=>!Yii::app()->user->isGuest),

        // array('label'=>'Organisation Branch', 'url'=>array('/branchsite/index'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
    ),
)); ?>
</div>
