<!DOCTYPE html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>D/ON: People + Data</title>
   <meta name="author" content="Lucas Mordzin" />
   <meta name="description" content="Description" />
   <meta name="keywords" content="Content" />
   <meta name="Resource-type" content="Document" />
   <link rel="icon" type="image/png" href="<?php echo base_url('assets/site/favicon'); ?>favicon-32x32.png" sizes="32x32" />
   <link rel="icon" type="image/png" href="<?php echo base_url('assets/site/favicon'); ?>favicon-16x16.png" sizes="16x16" />
   <link href="<?php echo base_url('assets/site'); ?>/css/style.css" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <script src="<?php echo base_url('assets/site'); ?>/js/typed.js" type="text/javascript"></script>

   <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90203656-1', 'auto');
      ga('send', 'pageview');

</script>
   <script>
      $(function(){
      
         $("#typed").typed({
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: true,
            contentType: 'html',
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
         });
      
         $(".reset").click(function(){
            $("#typed").typed('reset');
         });
      
      });
      
      function newTyped(){ /* A new typed object */ }
      
      function foo(){ console.log("Callback"); }
   </script>
   <style>
      /* code for animated blinking cursor */
      .typed-cursor{
      opacity: 1;
      font-weight: 100;
      -webkit-animation: blink 0.7s infinite;
      -moz-animation: blink 0.7s infinite;
      -ms-animation: blink 0.7s infinite;
      -o-animation: blink 0.7s infinite;
      animation: blink 0.7s infinite;
      }
      @-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
      }
      @-webkit-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
      }
      @-moz-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
      }
      @-ms-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
      }
      @-o-keyframes blink{
      0% { opacity:1; }
      50% { opacity:0; }
      100% { opacity:1; }
      }
   </style>
</head>

<?php echo $contents; ?>

   <script type="text/javascript">
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top - 72
            }, 1000);
            return false;
          }
        }
      });
   </script>
</body>
</html>