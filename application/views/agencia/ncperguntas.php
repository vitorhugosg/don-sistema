    <?php $this->load->view('commons/section/header-agencia'); ?>

    <main class="ncperguntas">
    	<div class="container-fluid">
    		<div class="row">
    			<!--CARDS DAS PERGUNTAS-->
    			<div class="col-md-8">
    				<div class="row">

    					<div class="col-md-6 mr-r">
    						<div class="card card-cascade narrower pergunta-card">

    							<!--Card image-->
    							<div class="view overlay hm-white-slight">
    								<img src="http://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/img%20(4).jpg" class="img-fluid" alt="">
    								<a>
    									<div class="mask"></div>
    								</a>
    							</div>
    							<!--/.Card image-->

    							<!--Card content-->
    							<div class="card-block text-center">
    								<!--Category & Title-->
    								<h4 class="card-title"><strong><a href="">Titulo da pergunta</a></strong></h4>

    								

    								<!--Description-->
    								<p class="card-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam...
    								</p>

    								<!--Card footer-->
    								<div class="card-footer">
    									<span class="left">Ativada</span>
    									<span class="right">
    										<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Visualizar"><i class="fa fa-eye"></i></a>
    										<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar"><i class="fa fa-pencil"></i></a>
    										<a data-toggle="tooltip" data-placement="top" title="" data-original-title="Excluir"><i class="fa fa-remove"></i></a>
    									</span>
    								</div>

    							</div>
    							<!--/.Card content-->

    						</div>
    					</div>
    					
    				</div>
    				
    			</div>
    			<div class="col-md-4">
    				<!-- SIDEBAR -->
    				<div class="card card-cascade narrower">
    					<div class="admin-panel info-admin-panel">
    						<!--Card image-->
    						<div class="view">
    							<h5>Sidebar</h5>
    						</div>
    						<!--/Card image-->

    						<!--Card content-->
    						<div class="card-block ">

    							<a class="btn btn-primary btn-lg waves-effect waves-light btn-block" data-toggle="modal" data-target="#criarNovaPergunta"><i class="fa fa-plus left"></i> Criar nova pergunta</a>

    							<!-- MODAL DE CRIAR NOVA PERGUNTA -->
    							<div class="modal fade modal-bf-fh show modal-nova-pergunta" id="criarNovaPergunta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    								<div class="modal-dialog" role="document">
    									<!--Content-->
    									<div class="modal-content">
    										<!--Header-->
    										<div class="modal-header">
    											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    												<span aria-hidden="true">×</span>
    											</button>
    										</div>
    										<!--Body-->
    										<div class="modal-body">

    											<!--Card-->
    											<div class="card card-cascade narrower z-depth-0">
    												<div class="admin-panel info-admin-panel">
    													<!--Card image-->
    													<div class="view">
    														<h5>Modals</h5>
    													</div>


    													<form action="" method="post" enctype="multipart/form-data">
    														<!--Body-->
    														<div class="md-form mt-3">
    															<i class="fa fa-user prefix"></i>
    															<input type="text" id="form3" class="form-control">
    															<label for="form3">TItulo da pergunta</label>
    														</div>

    														<div class="md-form">
    															<i class="fa fa-pencil prefix"></i>
    															<textarea type="text" id="form8" class="md-textarea"></textarea>
    															<label for="form8">Pergunta</label>
    														</div>
    														<div class="md-form">
    															<div class="fallback">
    																<p>Se tiver uma imagem ilustrativa a pergunta, selecione a mesma.</p>
    																<input id="form12" name="file" type="file" multiple />
    															</div>
    														</div>

    														<div class="text-center">
    															<button class="btn btn-default">Enviar</button>
    														</div>

    													</form>


    												</div>
    											</div>
    											<!--/.Card-->

    										</div>
    									</div>
    									<!--/.Content-->
    								</div>
    							</div>

    						</div>
    						<!--/.Card content-->

    					</div>
    				</div>
    			</div>


    			<!--/.Card-->
    		</div>
    	</div>
    </main>