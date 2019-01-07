<?php 
defined('_JEXEC') or die; // Запрет на прямой доступ к файлу
jimport('joomla.application.module.helper'); // Подключение вывода модулей из ядра

// Get params
$app         = JFactory::getApplication();
$params      = $app->getTemplate(true)->params;
$logo        = $params->get('logo');
$color       = $params->get('templatecolor');
$navposition = $params->get('navposition');
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Ошибка <?php echo $this->error->getCode()." — "; echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?></title>
  <link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/style.css" />
  <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/init.js"></script>
</head>
	<body>
	  <div id="all">
			<div id="back">
				<div id="header">
					<div class="logoheader">
						<div id="logo">
							<?php if ($logo) : ?>
								<img src="<?php echo $this->baseurl; ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($params->get('sitetitle')); ?>" />
							<?php else : ?>
								<?php echo htmlspecialchars($params->get('sitetitle')); ?>
							<?php endif; ?>
							<span class="header1">
								<?php echo htmlspecialchars($params->get('sitedescription')); ?>
							</span>
						</div>
					</div>	
				</div>
                <div class="error-message-block"> 
				 <h1>Ошибка <?php echo $this->error->getCode(); ?></h1>
				 <p class="error-message"><?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?></p>
				 <div class="btn-block">
			       <a class="btn btn-primary btn-large " href="http://healtylife.site/">Перейти на главную</a>
                 </div> 
                </div>				
			</div>			
		</div>				
	</body>
</html>