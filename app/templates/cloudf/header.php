<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $data['title'].' - '.SITETITLE; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

<!-- CSS -->
    <?php
        helpers\assets::css(array(
            helpers\url::template_path() . 'css/bootstrap.min.css',
            helpers\url::template_path() . 'css/bootstrap-responsive.min.css',
            helpers\url::template_path() . 'css/font-awesome.min.css',
            helpers\url::template_path() . 'css/main.css',
            helpers\url::template_path() . 'css/sl-slide.css',

        ));

        helpers\assets::js(helpers\url::template_path() .'js/vendor/modernizr-2.6.2-respond-1.1.0.min.js', 'cloudf');
    ?>

    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?= helpers\url::template_path() .'images/ico/favicon.ico'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= helpers\url::template_path() .'images/ico/apple-touch-icon-144-precomposed.png'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= helpers\url::template_path() .'images/ico/apple-touch-icon-114-precomposed.png'; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= helpers\url::template_path() .'images/ico/apple-touch-icon-72-precomposed.png'; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= helpers\url::template_path() .'images/ico/apple-touch-icon-57-precomposed.png'; ?>">
</head>

<body>