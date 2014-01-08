<?php
           if(isset($_GET['r'])){
              if($_GET['r']==="map/default/index") 
		         echo '<div id="header">';
			  else
			     echo '<div id="header1">';
				 
				 
		   }
		  ?>
		  
	<div id="logo">
		
			<?php echo Yii::t('app','Cartographie Ressources - Violences Bas&eacute;es sur le Genre'); //Gender-based Violence Resource Map ?>
		<a href="/"></a>
	</div>
</div>


<?php  if(isset($_GET['r'])){
          if($_GET['r']==="map/default/index") 
            echo '<div id="menu-top" style="margin-bottom:127px" >';
          else 
		     echo '<div id="menu-top"  >';
        }
		else
           echo '<div id="menu-top"  >';
?>
<?php $this->widget('zii.widgets.CMenu', array(
    'activeCssClass'=>'active',
    'activateParents'=>true,
    'items'=>array(
        //array('label'=>'Home', 'url'=>array('/site/index')),
        //array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>(Yii::app()->user->isGuest),
        array('label'=>'Organisation', 'url'=>array('/organisation/index'),
        'linkOptions'=>array('id'=>'menuOrganisation'),
        'itemOptions'=>array('id'=>'itemOrganisation'),

        'items'=>array(
           // array('label'=>'Organisation branch','url'=>array('/branchsite/index')),
           // array('label'=>'Partners', 'url'=>array('/partners/index')),
            array('label'=>'Contact', 'url'=>array('/contact/admin')),
            array('label'=>'Category','url'=>array('/category/admin')),
            array('label'=>'Services','url'=>array('/service/admin')),
        ),
        'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),
        array('label'=>'Geographic area', 'url'=>array('/departement/index'),
        'linkOptions'=>array('id'=>'menuGeographic'),
        'itemOptions'=>array('id'=>'itemgeographique'),

        /* 'items'=>array(
            array('label'=>'Department','url'=>array('/departement/index')),
            array('label'=>'Commune', 'url'=>array('commune/index')),
            array('label'=>'Quartier','url'=>array('quartier/index')),

        ), */
        'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),

        array('label'=>'Administration', 'url'=>array('#'),
        'linkOptions'=>array('id'=>'menuAdmin'),
        'itemOptions'=>array('id'=>'itemAdmin'),

        'items'=>array(
            array('label'=>'Users','url'=>array('/user/admin')),
            //array('label'=>'Rights','url'=>array('/rights')),


        ),
        'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),

        array('label'=>'Map', 'url'=>array('/map/default/index'),
        'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),

        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>(!Yii::app()->user->isGuest )),
		
		//array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>(!Yii::app()->user->isGuest && Yii::app()->user->name=="admin")),
		
))); ?>
</div>
