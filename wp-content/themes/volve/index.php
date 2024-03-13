<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?> ">
    <?php wp_head(); ?>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volve</title>
</head>
<body <?php body_class('example'); ?>>
<?php wp_body_open(); ?>
<?php
the_content();
?>

<?php wp_footer(); ?>
</body>
</html>