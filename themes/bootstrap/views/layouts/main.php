<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="pt-br">

    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="pt-br" />
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="themes/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="themes/assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="themes/assets/css/flexslider.css">
        <link rel="stylesheet" href="themes/assets/css/font-awesome.css">
        <link rel="stylesheet" href="themes/assets/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="themes/assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="themes/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="themes/assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="themes/assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="themes/assets/ico/apple-touch-icon-57-precomposed.png">

    </head>


<!--
<? /*php $this->widget('bootstrap.widgets.TbNavbar',array(

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
)); */?>
<div class="hero-unit1">
<div class="span2 img-circle">
<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/logo.jpg');?>

</div>
</br>

<h1>Renascença</h1>

</div>-->

<body>
	
				<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
					)); ?><!-- breadcrumbs -->
				<?php endif?>

				<?php echo $content; ?>

				

</body>
</html>
