<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/dashboard'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/dashboard'); ?>/css/mdb.css" rel="stylesheet">

    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/dashboard'); ?>/css/style.css" rel="stylesheet">

</head>

<body class="fixed-sn white-skin">
	<?php echo $contents; ?>

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="<?php echo base_url('assets/dashboard'); ?>/js/jquery-3.1.1.min.js"></script>

    <script>
        $("#navigation").load("components/navigation.html");
    </script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url('assets/dashboard'); ?>/js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assets/dashboard'); ?>/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assets/dashboard'); ?>/js/mdb.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/dashboard'); ?>/js/vendor/tinymce/tinymce.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/dashboard'); ?>/js/scripts.js"></script>
  



</body>

</html>