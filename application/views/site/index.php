
<body>

   <!-- ============ MOBILE HEADER ============ -->

   <header class="mobileHeader">
      <div class="headerContainer">
         <img src="<?php echo base_url('assets/site'); ?>/img/menu.svg" id="menuButton">
         <?xml version="1.0" encoding="utf-8"?>
         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 101.5 36" style="enable-background:new 0 0 101.5 36;" xml:space="preserve">
            <style type="text/css">
               .st1{fill:none;}
            </style>
            <g>
               <g>
                  <path d="M56.3,30c-6.6,0-12-5.4-12-12s5.4-12,12-12s12,5.4,12,12S62.9,30,56.3,30z M56.3,9.1c-4.9,0-8.9,4-8.9,8.9s4,8.9,8.9,8.9
                     s8.9-4,8.9-8.9S61.2,9.1,56.3,9.1z"/>
                  <path d="M18,30H6v-3.1h12c4.9,0,8.9-4,8.9-8.9s-4-8.9-8.9-8.9H6V6h12c6.6,0,12,5.4,12,12S24.6,30,18,30z"/>
                  <path d="M95.5,30h-3.1V18c0-4.9-4-8.9-8.9-8.9s-8.9,4-8.9,8.9v12h-3.1V18c0-6.6,5.4-12,12-12s12,5.4,12,12V30z"/>
                  <polygon class="colorAnimation" points="33.1,30 30,30 41.2,6 44.3,6       "/>
               </g>
               <rect class="st1" width="101.5" height="36"/>
            </g>
         </svg>
      </div>
      <nav id="menu">
         <ul>
            <li><a href="#home">home</a>
            </li>
            <li><a href="#sobre">sobre</a>
            </li>
            <li><a href="#filosofia">filosofia</a>
            </li>
            <li><a href="#expertises">expertises</a>
            </li>
            <li><a href="#contato">contato</a> </li>
         </ul>
      </nav>
      </div>
   </header>
   <script type="text/javascript">
      $(document).ready(function () {
       $("#menuButton, a").mouseup(function () {
           $("#menu").toggleClass("flex");
           $(".mobileHeader").toggleClass("fullHeight");
       });
      });
   </script>

   <!-- ============ DESKTOP HEADER ============ -->

   <header class="desktopHeader">
      <div class="headerSeparator">
      <a href="#home" target="_blank">
         <?xml version="1.0" encoding="utf-8"?>
         <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 184.5 67.3" style="enable-background:new 0 0 184.5 67.3;" xml:space="preserve">
            <g>
               <path d="M103.8,49.5C90.1,49.5,79,38.4,79,24.8S90.1,0,103.8,0s24.8,11.1,24.8,24.8S117.4,49.5,103.8,49.5z M103.8,6.5
                  c-10.1,0-18.3,8.2-18.3,18.3S93.7,43,103.8,43s18.3-8.2,18.3-18.3S113.9,6.5,103.8,6.5z"/>
               <path d="M24.8,49.5H0V43h24.8c10,0,18.2-8.2,18.2-18.2S34.8,6.5,24.8,6.5H0V0h24.8c13.6,0,24.8,11.1,24.8,24.8S38.4,49.5,24.8,49.5
                  z"/>
               <path d="M184.5,49.5H178V24.8c0-10.1-8.2-18.3-18.3-18.3s-18.3,8.2-18.3,18.3v24.8H135V24.8C135,11.1,146.1,0,159.7,0
                  c13.6,0,24.8,11.1,24.8,24.8V49.5z"/>
               <polygon class="colorAnimation" points="56,49.5 49.5,49.5 72.6,0 79,0   "/>
               <g>
                  <path d="M79,58.3h0.7v1.5c0.6-0.9,1.5-1.7,2.8-1.7c1.7,0,3.3,1.3,3.3,3.6l0,0c0,2.2-1.7,3.6-3.3,3.6c-1.4,0-2.3-0.8-2.8-1.6v3.6
                     H79V58.3z M85.1,61.8L85.1,61.8c0-1.8-1.2-3-2.7-3c-1.4,0-2.8,1.2-2.8,2.9l0,0c0,1.8,1.4,2.9,2.8,2.9
                     C83.9,64.7,85.1,63.6,85.1,61.8z"/>
                  <path d="M87.4,61.7L87.4,61.7c0-2,1.4-3.6,3.2-3.6c1.9,0,3.1,1.6,3.1,3.6c0,0.1,0,0.2,0,0.3H88c0.1,1.7,1.3,2.7,2.7,2.7
                     c1.1,0,1.8-0.5,2.4-1.1l0.5,0.4c-0.7,0.8-1.5,1.3-2.8,1.3C89,65.3,87.4,63.9,87.4,61.7z M93.1,61.4c-0.1-1.4-0.9-2.7-2.5-2.7
                     c-1.4,0-2.4,1.1-2.5,2.7H93.1z"/>
                  <path d="M95.3,61.8L95.3,61.8c0-1.9,1.5-3.6,3.5-3.6s3.5,1.6,3.5,3.6l0,0c0,1.9-1.5,3.6-3.5,3.6C96.8,65.3,95.3,63.7,95.3,61.8z
                     M101.6,61.8L101.6,61.8c0-1.7-1.2-3-2.8-3c-1.6,0-2.8,1.3-2.8,2.9l0,0c0,1.7,1.2,3,2.8,3S101.6,63.4,101.6,61.8z"/>
                  <path d="M104.3,58.3h0.7v1.5c0.6-0.9,1.5-1.7,2.8-1.7c1.7,0,3.3,1.3,3.3,3.6l0,0c0,2.2-1.7,3.6-3.3,3.6c-1.4,0-2.3-0.8-2.8-1.6
                     v3.6h-0.7V58.3z M110.4,61.8L110.4,61.8c0-1.8-1.2-3-2.7-3c-1.4,0-2.8,1.2-2.8,2.9l0,0c0,1.8,1.4,2.9,2.8,2.9
                     C109.2,64.7,110.4,63.6,110.4,61.8z"/>
                  <path d="M113.3,55.4h0.7v9.8h-0.7V55.4z"/>
                  <path d="M116.1,61.7L116.1,61.7c0-2,1.4-3.6,3.2-3.6c1.9,0,3.1,1.6,3.1,3.6c0,0.1,0,0.2,0,0.3h-5.7c0.1,1.7,1.3,2.7,2.7,2.7
                     c1.1,0,1.8-0.5,2.4-1.1l0.5,0.4c-0.7,0.8-1.5,1.3-2.8,1.3C117.6,65.3,116.1,63.9,116.1,61.7z M121.8,61.4
                     c-0.1-1.4-0.9-2.7-2.5-2.7c-1.4,0-2.4,1.1-2.5,2.7H121.8z"/>
                  <path d="M127.9,63.2L127.9,63.2c0-1.5,1.2-2.3,3-2.3c1,0,1.6,0.1,2.3,0.3v-0.3c0-1.4-0.8-2.1-2.3-2.1c-0.8,0-1.5,0.2-2.1,0.6
                     l-0.2-0.6c0.8-0.3,1.5-0.6,2.4-0.6s1.7,0.3,2.2,0.8s0.7,1.1,0.7,1.9v4.3h-0.6V64c-0.5,0.7-1.3,1.3-2.6,1.3
                     C129.2,65.3,127.9,64.6,127.9,63.2z M133.1,62.6v-0.8c-0.6-0.1-1.3-0.3-2.3-0.3c-1.4,0-2.3,0.6-2.3,1.6l0,0c0,1,0.9,1.6,2,1.6
                     C132,64.7,133.1,63.8,133.1,62.6z"/>
                  <path d="M136.1,58.3h0.7v1.3c0.5-0.8,1.2-1.4,2.5-1.4c1.7,0,2.7,1.2,2.7,2.8v4.2h-0.7v-4.1c0-1.4-0.8-2.3-2.2-2.3
                     c-1.3,0-2.4,1-2.4,2.4v4H136L136.1,58.3L136.1,58.3z"/>
                  <path d="M143.9,61.8L143.9,61.8c0-2.3,1.7-3.6,3.3-3.6c1.4,0,2.3,0.8,2.8,1.6v-4.4h0.7v9.8H150v-1.5c-0.6,0.9-1.5,1.7-2.8,1.7
                     C145.6,65.3,143.9,64,143.9,61.8z M150.1,61.7L150.1,61.7c0-1.8-1.4-3-2.8-3c-1.5,0-2.7,1.1-2.7,2.9l0,0c0,1.8,1.2,3,2.7,3
                     C148.8,64.7,150.1,63.5,150.1,61.7z"/>
                  <path d="M156.8,61.8L156.8,61.8c0-2.3,1.7-3.6,3.3-3.6c1.4,0,2.3,0.8,2.8,1.6v-4.4h0.7v9.8H163v-1.5c-0.6,0.9-1.5,1.7-2.8,1.7
                     C158.5,65.3,156.8,64,156.8,61.8z M163,61.7L163,61.7c0-1.8-1.4-3-2.8-3c-1.5,0-2.7,1.1-2.7,2.9l0,0c0,1.8,1.2,3,2.7,3
                     C161.6,64.7,163,63.5,163,61.7z"/>
                  <path d="M165.6,63.2L165.6,63.2c0-1.5,1.2-2.3,3-2.3c1,0,1.6,0.1,2.3,0.3v-0.3c0-1.4-0.8-2.1-2.3-2.1c-0.8,0-1.5,0.2-2.1,0.6
                     l-0.2-0.6c0.8-0.3,1.5-0.6,2.4-0.6s1.7,0.3,2.2,0.8s0.7,1.1,0.7,1.9v4.3H171V64c-0.5,0.7-1.3,1.3-2.6,1.3
                     C166.9,65.3,165.6,64.6,165.6,63.2z M170.8,62.6v-0.8c-0.6-0.1-1.3-0.3-2.3-0.3c-1.4,0-2.3,0.6-2.3,1.6l0,0c0,1,0.9,1.6,2,1.6
                     C169.7,64.7,170.8,63.8,170.8,62.6z"/>
                  <path d="M174.1,63.4v-4.5h-1v-0.6h1v-2.2h0.7v2.2h2.4v0.6h-2.4v4.4c0,1,0.6,1.3,1.4,1.3c0.3,0,0.6-0.1,1-0.2V65
                     c-0.3,0.2-0.7,0.2-1.1,0.2C175,65.3,174.1,64.7,174.1,63.4z"/>
                  <path d="M178.6,63.2L178.6,63.2c0-1.5,1.2-2.3,3-2.3c1,0,1.6,0.1,2.3,0.3v-0.3c0-1.4-0.8-2.1-2.3-2.1c-0.8,0-1.5,0.2-2.1,0.6
                     l-0.2-0.6c0.8-0.3,1.5-0.6,2.4-0.6s1.7,0.3,2.2,0.8s0.7,1.1,0.7,1.9v4.3H184V64c-0.5,0.7-1.3,1.3-2.6,1.3
                     C180,65.3,178.6,64.6,178.6,63.2z M183.9,62.6v-0.8c-0.6-0.1-1.3-0.3-2.3-0.3c-1.4,0-2.3,0.6-2.3,1.6l0,0c0,1,0.9,1.6,2,1.6
                     C182.7,64.7,183.9,63.8,183.9,62.6z"/>
               </g>
            </g>
         </svg>
         </a>
      </div>
      <div class="headerSeparator">
         <nav>
            <ul>
               <li><a href="#home">home</a>
               </li>
               <li><a href="#sobre">sobre</a>
               </li>
               <li><a href="#filosofia">filosofia</a>
               </li>
               <li><a href="#expertises">expertises</a>
               </li>
               <li><a href="#contato">contato</a> </li>
            </ul>
         </nav>
      </div>
      <div class="headerSeparator flexibilize flexAlignEnd">
         <div class="line social">
            <a href="https://www.facebook.com/peoplendata" target="_blank"><img src="<?php echo base_url('assets/site'); ?>/img/facebook.png"></a>
            <a href="https://www.instagram.com/peoplendata/" target="_blank"><img src="<?php echo base_url('assets/site'); ?>/img/instagram.png"></a>
            <a href="https://twitter.com/peoplendata/" target="_blank"><img src="<?php echo base_url('assets/site'); ?>/img/twitter.png"></a>
         </div>
      </div>
   </header>

   <!-- ============ BODY ============ -->

   <section class="centralize abstractBg" id="home">
      <iframe width="100%" height="100%" src="https://www.youtube.com/embed/3subUogaAkU?rel=0&amp;autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
   </section>
   <section class="centralize zindex" id="sobre">
      <div class="two">
         <h1 class="uppercase paddingBottom5 colorAnimation">
            Somos motivados pelas pessoas e orientados por dados.
         </h1>
         <p>
            Nosso mundo se tornou um lugar muito mais dinâmico com a massificação da tecnologia. Para garantir a eficiência na comunicação, não podemos nos prender às fórmulas do passado. Por isso, utilizamos uma nova abordagem ao processo criativo: mais colaborativa para conectar pessoas e dados.
         </p>
      </div>
   </section>
   <section class="zindex lightGreyBg autoHeight displayTable" id="filosofia">
      <div class="two onDemandBg displayTableCell"></div>
      <div class="two displayTableCell">
         <div class="padding15">
            <h1 class="uppercase paddingBottom5"><span class="colorAnimation">/ON</br></span> Demand</br></h1>
            <p class="marginTop5 text-left">
               Qual é a sua necessidade? Entendemos cada caso de forma individual, aplicando nossa metodologia de gestão da marca para desenvolver ações e estratégias segmentadas de acordo com o contexto, o propósito e os canais disponíveis.
            </p>
         </div>
      </div>
   </section>
   <section class="zindex lightGreyBg autoHeight displayTable">
      <div class="two onLineBg displayTableCell layoutFixMobile"></div>
      <div class="two displayTableCell">
         <div class="padding15">
            <h1 class="uppercase paddingBottom5"><span class="colorAnimation">/ON</br></span> Line</br></h1>
            <p class="marginTop5 text-left">
               A criatividade ganha força quando tem como base insights concretos sobre o contexto social. Queremos quebrar com o convencional e para isso nos mantemos sempre atualizados, além de colocar nossas cabeças para funcionar.
            </p>
         </div>
      </div>
      <div class="two onLineBg displayTableCell layoutFix"></div>
   </section>
   <section class="zindex lightGreyBg autoHeight displayTable">
      <div class="two onTrackBg displayTableCell"></div>
      <div class="two displayTableCell">
         <div class="padding15">
            <h1 class="uppercase paddingBottom5"><span class="colorAnimation">/ON</br></span> Track</br></h1>
            <p class="marginTop5 text-left">
               O que isso significa? Que os nossos clientes tenham a certeza de que estão no rumo certo.  Aliamos técnicas do design com ferramentas de monitoramento de forma integrada com nossos processos e atividades.
            </p>
         </div>
      </div>
   </section>
   <section class="autoHeight paddingFix" id="expertises">
      <div class="four">
         <img src="<?php echo base_url('assets/site'); ?>/img/inteligencia.png" class="servicesIcons">
         <h1 class="uppercase paddingBottom10 colorAnimation">inte</br>ligên</br>cia</h1>
         <p>
            Market Segmentation</br>
            Consumer Insights</br>
            Product Research</br>
            Etnografia Aplicada</br>
            Branding Strategy
         </p>
      </div>
      <div class="four">
         <img src="<?php echo base_url('assets/site'); ?>/img/performance.png" class="servicesIcons">
         <h1 class="uppercase paddingBottom10 colorAnimation">per</br>for</br>mance</h1>
         <p>
            Media Analytics</br>
            Growth Hacking</br>
            Análise Competitiva</br>
            Channel Alignment</br>
            Inbound Marketing</br>
         </p>
      </div>
      <div class="four">
         <img src="<?php echo base_url('assets/site'); ?>/img/conteudo.png" class="servicesIcons">
         <h1 class="uppercase paddingBottom10 colorAnimation">con</br>te</br>údo</h1>
         <p>
            Storytelling</br>
            Endomarketing</br>
            Social Media Content</br>
            Branded Publishing</br>
            Produção Audiovisual</br>
         </p>
      </div>
      <div class="four">
         <img src="<?php echo base_url('assets/site'); ?>/img/experiencia.png" class="servicesIcons">
         <h1 class="uppercase paddingBottom10 colorAnimation">expe</br>riên</br>cia</h1>
         <p>
            UX Design</br>
            Novas Tecnologias</br>
            Real-Time Marketing</br>
            Customer Relationship</br>
            Websites & Apps</br>
         </p>
      </div>
   </section>
   <section class="lightGreyBg centralize zindex variablePadding" id="contato">
      <div class="two">
         <h1 class="paddingBottom10 green-text text-align-center colorAnimation">
            <span class="light black-text">Um parceiro para ajudar você a:</span></br>
            <div class="type-wrap">
               <div id="typed-strings">
                  <p>pensar estrategicamente</p>
<p>conhecer o seu público de verdade</p>
<p>construir sua identidade de marca</p>
<p>gerar conteúdo relevante</p>
<p>otimizar sua verba de marketing</p>
<p>aumentar suas vendas com novos canais</p>
               </div>
               <span id="typed" style="white-space:pre;"></span>
            </div>
         </h1>
         <p class="marginTop5 text-align-center">
            Rua Prof. Ayrton Roberto de Oliveira, 32, Sala 1001</br>
            Florianópolis, Santa Catarina, Brasil</br>
            contato@don.ag</br></br></br>
            <a href="http:///www.daraujo.com" target="_blank" style="text-decoration: none; color: #808080">Grupo D/Araújo</a>
         </p>
      </div>
   </section>
