<body class="fixed-sn white-skin">

    <div class="container">
        <div class="row">
            <section class="signup">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 mt-1 hidden-sm-down">
                            <h1>Sistema D/On</h1>
                            <h3>Relatórios Personalizados</h3>

                            <ul class="advantages-list">
                                <li><span class="green-text"><i class="fa fa-check"></i></span> Análise de métricas</li>
                                <li><span class="green-text"><i class="fa fa-check"></i></span> Relatório Mensal</li>
                                <li><span class="green-text"><i class="fa fa-check"></i></span> Aprovação de campanhas</li>
                                <li><span class="green-text"><i class="fa fa-check"></i></span> Contato com Atendimento</li>
                                <li><span class="green-text"><i class="fa fa-check"></i></span> Suporte personalizado</li>
                                <li>...D/On sempre inovando!</li>
                            </ul>                        

                            <a href="<?php echo base_url(); ?>" class="btn btn-outline-primary">Voltar ao site</a>
                        </div>

                        <div class="col-md-5 offset-md-3">

                            <!--Form with header-->
                            <div class="card">
                                <div class="card-block">
                                    <form method="POST" action="<?php echo base_url('login/') ?>">


                                        <!--Header-->
                                        <div class="form-header">
                                            <h3><i class="fa fa-lock"></i> Entrar:</h3>
                                        </div>

                                        <!--Body-->
                                        <div class="md-form">
                                            <i class="fa fa-user prefix"></i>
                                            <input type="text" name="email" id="form1" class="form-control">
                                            <label for="form1">Email</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fa fa-lock prefix"></i>
                                            <input type="password" name="senha" id="form4" class="form-control">
                                            <label for="form4">Senha</label>
                                        </div>
                                        <input type="hidden" name="captcha">
                                        <div class="text-center">
                                            <button name="entrar" value="entrar" type="submit" class="btn btn-primary">Logar</button>
                                            <a href="#" class="btn btn-danger"> Google</a>
                                        </div>
                                    </form>

                                </div>

                                <!--Footer-->
                                <div class="modal-footer text-center">
                                   
                                   <div class="text-center">
                                       <a href="<?php echo base_url('login/cadastrar/'); ?>" class="btn btn-success"> Cadastra-se</a>
                                   </div>
                               </div>

                           </div>
                           <!--/Form with header-->
                       </div>
                   </div>

               </div>
           </section>
       </div>
   </div>

