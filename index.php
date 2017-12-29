

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
<script src="http://cdn.syncfusion.com/js/assets/external/jquery-1.10.2.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="index.html">Varitus - test</a>
            </div>
			</div>
              
            </div>
          
                                
		</nav>
		
		<div class="col-md-12" style="margin-top: 15px;">
		
		<div class="panel panel-default">
                        <div class="panel-heading">
                          Usuarios
							
                                
								<!--<a href="pages/usuarios/add.php" ><button type="button"style="font-size:16px; " class="btn btn-default btn-xs dropdown-toggle pull-right" data-toggle="dropdown">
                                    Adicionar</i>
                                </button></a>-->
								</div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
							<div class="panel panel-default">
                        <div class="panel-heading">
                          Novo (http://localhost/api/usuarios/add.php?name=????&description=????)
							
								
                        <form action="usuarios/create.php" method="GET">
						</div>
								<div class="panel-body">
						<div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" placeholder="" name="name">
                                        </div>
										
										<div class="form-group">
                                            <label>Descricao</label>
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>
                            
                        </div>
						<div class="row padding:5px">
						<a href="http://localhost/api/usuarios/search.php" >
							<button type="button" class="btn btn-primary " style="margin-left:40px">Buscar Todos</button></a>
							<button type="submit" class="btn btn-default pull-right" style="margin-right:40px">Salvar</button>
							<div>
						</form>
                    </div>
							
							<br>
							
							</div>
							
						</div>
                    </div>
					
					</div>
</body>
</html>