<!DOCTYPE html>
<html lang="ja">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="<?= image('favicon.png') ?>" />
<link rel="apple-touch-icon" href="<?= image('touch-icon.png') ?>" />

<?php wp_head(); ?>

<noscript><link rel="stylesheet" href="<?= css('noscript') ?>" /></noscript>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96155836-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body id="top">
    <div class="wrapper">
        <main>
            <?php if ( !is_front_page() ) : ?>
                <header class="l-header">
                    <div class="l-header--logo">
                        <a href="<?= get_bloginfo('url') ?>">
                            <img src="<?= image('logo.png') ?>" alt="<?= the_title(); ?>">
                        </a>
                    </div>
                </header>
            <?php endif; ?>
