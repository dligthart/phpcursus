<?php if ($params[0]->status === 'published') : ?>

<h1 class="centertext"><?php echo ucfirst($params[0]->title); ?></h1>

<p class="centeredblog"><?php echo $params[0]->content; ?></p>

<?php else : ?>

<h1 class="centertext">Deze pagina is nog niet gepubliceerd..</h1>

<?php endif; ?>