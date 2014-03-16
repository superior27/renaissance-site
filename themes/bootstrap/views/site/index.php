<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<!--<?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/Black-and-White-Lace.jpg');?>
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit',array(
    'heading'=>CHtml::encode(Yii::app()->name),
)); ?>
<?php $this->endWidget(); ?>-->
<!--<p>Congratulations! You have successfully created your Yii application.</p>
-->

<!--
<p>You may change the content of this page by modifying the following two files:</p>

<ul>
    <li>View file: <code><?php echo __FILE__; ?></code></li>
    <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
    the <a href="http://www.yiiframework.com/doc/">documentation</a>.
    Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
    should you have any questions.</p>

-->
<div class="row-fluid">
	
	<div class="span12" >
<?php $this->widget('bootstrap.widgets.TbCarousel', array(
    'items'=>array(
        array('image'=>'images/modelo8.png', 'label'=>'First Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'images/modelo6.jpg', 'label'=>'Second Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
        array('image'=>'images/modelo4.jpg', 'label'=>'Third Thumbnail label', 'caption'=>'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
    ),
    'htmlOptions'=>array('width'=>'50%','height'=>'10%')
)); ?>
</div>
<div class="offset2"></div>
</div>


<div class="row-fluid">
	<div class="span12">
	
	<div class="span4  alert alert-info">
		<a href="index.php/site/page?view=about" title="Sobre">
				<img src ="images/info.png" class="span3">
			</a> 
		<h2>
			Sobre
		</h2>
	</br>
		<p>
			//Criar um texto aqui para falar um pouco sobre o "soubre"
			</p>
			
		
	</div>

	<div class="span4 alert alert-info">
		<a href="index.php/site/page?view=about" title="Vitrine">
				<img src ="images/modelos1.png" class="span3">
		</a> 
		<h2>
			Vitrine
		</h2>
	</br>
		<p>
			Fique por dentro dos nossos principais modelos
			//incrementar com um texto um pouco maior
		</p>
	</div>

	<div class="span4 alert alert-info">
		<h1>
			Redes Sociais
		</h1>
		
		<p>
			<a href="http://facebook.com" rel="external" title="Facebook">
				<img src ="images/facebook2.png" class="span3">
			</a>
		

		
			<a href="http://twitter.com" rel="external" title="Twitter">
				<img src ="images/twitter1.png" class="span3">
			</a>

			<a href="http://plus.google.com" rel="external" title="Google+">
				<img src ="images/google+.png" class="span3">
			</a>

		
			<a href="http://instagram.com" rel="external" title="Instagram">
				<img src ="images/instagram1.png" class="span3">
			</a>
		</p>
	</div>

</div>
</div>
