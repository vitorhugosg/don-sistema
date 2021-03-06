

<header>
  <!-- Sidebar navigation -->
  <ul id="slide-out" class="side-nav fixed sn-bg-1 custom-scrollbar">
    <!-- Logo -->
    <li>
      <div class="user-box">
        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="img-fluid rounded-circle">
        <p class="user text-center black-text"><?php echo $usuario['nome']; ?></p>
      </div>
    </li>
    <!--/. Logo -->
    <!-- Side navigation links -->
    <li>
     <ul class="collapsible collapsible-accordion">

       <li>
         <a href="<?php echo base_url(). urlDashUser($usuario['nivel']); ?>" class="collapsible-header waves-effect arrow-r"></i> <i class="fa fa-code"></i> Ínicio</a>
       </li>


       <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart"></i> Clientes<i class="fa fa-angle-down rotate-icon"></i></a>
         <div class="collapsible-body">
           <ul>
             <li>
               <a href="<?php echo base_url('agencia/novacampanha'); ?>" class="waves-effect">- Novo Cliente</a>
             </li>
           </ul>
         </div>
       </li>
      <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart"></i> Ferramenta<i class="fa fa-angle-down rotate-icon"></i></a>
         <div class="collapsible-body">
           <ul>
             <li>
               <a href="<?php echo base_url('agencia/ncperguntas'); ?>" class="waves-effect">- NC Perguntas</a>
             </li>
           </ul>
         </div>
       </li>
       <li>
        <a href="faq.html" class="collapsible-header waves-effect arrow-r"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a>
      </li>
    </ul>
  </li>
  <!--/. Side navigation links -->
  <div class="sidenav-bg mask-strong"></div>
</ul>
<!--/. Sidebar navigation -->

<!-- Navbar -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-dark scrolling-navbar double-nav">

  <!-- SideNav slide-out button -->
  <div class="float-left">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>

  </div>

  <!-- Breadcrumb-->
  <ol class="breadcrumb hidden-lg-down">
    <li class="breadcrumb-item active">
      <a href="<?php echo base_url(). urlDashUser($usuario['nivel']); ?>"> <?php echo $tituloPagina; ?></a>
    </li>
    <li class="breadcrumb-item active"><?php echo $subTituloPagina; ?></li>
  </ol>

  <!--Navbar links-->
  <ul class="nav navbar-nav nav-flex-icons ml-auto">


    <li class="nav-item dropdown">
     <a class="nav-link dropdown-toggle" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <i class="fa fa-user"></i> <span class="hidden-sm-down">Conta</span>
     </a>
     <div class="dropdown-menu dropdown-ins dropdown-menu-right" aria-labelledby="userDropdown">
       <a class="dropdown-item" href="<?php echo base_url(). urlDashUser($usuario['nivel']); ?>/logout">Deslogar</a>
       <a class="dropdown-item" href="#">Minhas Informações</a>
     </div>
   </li>
 </ul>
 <!--/Navbar links-->

</nav>
<!-- /.Navbar -->

</header>