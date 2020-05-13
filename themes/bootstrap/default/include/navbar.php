<?php
// generates boostrap navbar for frontpage

$links = [
    [	'href' => SimpleSAML\Module::getModuleURL('core/frontpage_welcome.php'),
	'text' => '{core:frontpage:welcome}',
	'shorttext' => '{core:frontpage:welcome}',
    ],
    [	'href' => SimpleSAML\Module::getModuleURL('core/frontpage_config.php'),
        'text' => '{core:frontpage:configuration}',
        'shorttext' => '{core:frontpage:configuration}',
    ],
    [	'href' => SimpleSAML\Module::getModuleURL('core/frontpage_auth.php'),
        'text' => '{core:frontpage:auth}',
        'shorttext' => '{core:frontpage:auth}',
    ],
    [	'href' => SimpleSAML\Module::getModuleURL('core/frontpage_federation.php'),
        'text' => '{core:frontpage:federation}',
        'shorttext' => '{core:frontpage:federation}',
    ],

];

?>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/simplesaml/">SimpleSAMLPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="navbar-collapse collapse" id="navbarsExampleDefault">
	<ul class="navbar-nav mr-auto">
	    <?php
	    foreach ($links as $ln) {
		echo '<li class="nav-item">
			<a class="nav-link" href="'.$ln['href'].'">'.$this->t($ln['text']).'</a>
		    </li>';
	    }
	    ?>
	</ul>
    </div>
</nav>