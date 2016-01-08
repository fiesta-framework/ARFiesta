<?php
/**
* Layout template file for Whoops's pretty error output.
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $tpl->escape($page_title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <style><?php echo $stylesheet ?></style>
  </head>
  <body>


  <div class="Whoops container">
      <div class="stack-container">
        <div class="frames-container cf <?php echo (!$has_frames ? 'empty' : '') ?>" style="<?php echo (!$has_frames ? 'width:0%' : '') ?>">
          <?php $tpl->render($frame_list) ?>
        </div>
        <div class="details-container cf"  style="<?php echo (!$has_frames ? 'width:100%' : '') ?>">
        <div class="header_type">
            <?php foreach ($name as $i => $nameSection): ?>
                <?php if ($i == count($name) - 1): ?>
                  <span class="exc-title-primary"><?php echo $tpl->escape($nameSection) ?></span>
                <?php else: ?>
                  <?php echo $tpl->escape($nameSection) . ' \\' ?>
                <?php endif ?>
              <?php endforeach ?>
              <?php if ($code): ?>
                <span title="Exception Code">(<?php echo $tpl->escape($code) ?>)</span>
              <?php endif ?>
          </div>
          <header>
            <?php $tpl->render($header) ?>
          </header>

          <?php 
          $tpl->render($frame_code) ?>
          <?php $tpl->render($env_details) ?>
        </div>
      </div>
    </div>
    

    <script src="//cdnjs.cloudflare.com/ajax/libs/zeroclipboard/1.3.5/ZeroClipboard.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.js"></script>
    <script><?php echo $zepto ?></script>
    <script><?php echo $javascript ?></script>
  </body>
</html>
