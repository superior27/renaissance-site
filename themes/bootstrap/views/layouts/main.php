<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
   
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    
    'collapse'=>'true',
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/')),
                array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Usuário', 'url'=>array('/user/index')),				
                array('label'=>'Contato', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
        '<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
    ),
)); ?>
<div class="hero-unit1">
	<div class="span2 img-circle">
		<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/logo.jpg');?>
	
</div>
</br>

  <h1>Renascença</h1>
  
</div>

<div class="container" id="page">

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	

</div><!-- page -->
<div class="footer">
	<div class="container">
		<div class="row-fluid">
		
		Criado por  <!--<?php echo date('Y'); ?>--> CommSystem.<br/>
		Todos os direitos reservados.<br/>
		<?php echo Yii::powered(); ?>
	
	</div>
	</div>
	</div><!-- footer -->
</body>
</html>
