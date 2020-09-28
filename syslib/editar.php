
<!DOCTYPE html>
<html lang="pt-br">
<head>

<?php
                            //pesquisar.php
                            
                            // Inclui os detalhes da conexão
                           $host = "localhost";
                           $dbusername = "root";
                           $dbpassword = "";
                           $dbname = 'livraria';
                          
                            
                            // Tenta conectar e executar a configuração
                             
                                // Cria o objeto da conexão PDO
                                
                                

                                //Criar a conexao
                                $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                                
                              
                                
                                    // tentativa de paginação
                            
                           
                             
$id = $_GET['id'];
$pesquisar = $_GET['isbn'];
                                 
$result_livros = ("SELECT * FROM livros WHERE ID_livro = '$id' ");

$resultado= mysqli_query($conn, $result_livros);
$exibe = mysqli_fetch_assoc($resultado)
    


?>     

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SysLib</title>

    <!----- Fonte ----->  
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Noto+Sans+JP&family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">

    <!----- Bootstrap ----->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/styles.css">
    
    <!----- Scripts ----->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" 
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" 
    crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     
    <!----- Font Awesome ----->
    <script src="https://kit.fontawesome.com/242457c615.js" crossorigin="anonymous"></script>

     <!----- Progress Bar ----->
    <script> src="js/progressbar.min.js"</script>
    
    <!----- Parallax ----->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>

</head>


<body>
    <header>    
		<div class="container" id="nav-container">
			<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
				<a class="navbar-brand" href="index.html"> 
					<img id="logo" src="logo.png"> SysLib: Editar Livros
					</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbar-links"
					aria-controls="navbar-links" aria-expanded="false" 
					aria-label="toggle navigation">
					<span class="navbar-toggler-icon"></span> 
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbar-links">
					<div class="navbar-nav">
						<a class="nav-item nav-link" id="home-menu" href="home.php"></span> Home</a>
						<a class="nav-item nav-link" id="estoque-menu" href="estoque.html#">Estoque</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="pesquisar.html#">Pesquisa</a>
						<a class="nav-item nav-link" id="pesquisa-menu" href="pedidos.html#">Pedido</a>
					</div>
				</div> 
			</nav>
			
			</div>
		</header>
	<br /><br />

	<main>

		
<div id="cadastro">
	<div class="container"> 
		<div class="row">
			<div class="col-12">      
				 <h4 class="main-title"><u>Pesquisa</u></h4> 

			<form method="POST" action="pesquisar.php">
		   <input type="text" name="pesquisar" placeholder="ISBN, Autor, Editora ou Título" size="50">
			<input type="submit" value="BUSCAR">
			</form>
			</div>
		</div>
	</div>
                        
				<div id="cadastro">
				<div class="container"> 
					<div class="row">
					<div class="col-12">  		
						<h4 class="main-title"><u>Edição de Livros </u></h4> 		
					  <h5 >Nesta página você pode Editar o livro "<b><?php echo $exibe['titulo']; ?>"</b> </h5>
                	Cheque cada informação e preencha os dados com cuidado; <br />
                	O Número ISBN é imprescidível, e deve ser usado a máquina leitora de código de barras para a devida leitura dele; <br />
                	Se for o caso de não ter código de barras, pesquise pelo título na internet e cadastre o livro ou chame o seu supervisor; <br />
					Ele(a) irá lhe ajudar com essa missão, boa sorte.  <br />
					<b>P.S.:</b> O que estiver com <b>ASTERISCO *</b> deve ser preenchido com máxima importância. 
					</div>

					<table>
            		<form method="post" action="salvar_edicao.php" enctype="multipart/form-data">
					<tr>
						<ul>


		
						<tr>								
							<div class="col-9">
									<div class="row data">
										<td> <li><b>ID - Livro<span class="asterisk">*</span>: </b> </td>
										<td> <font color='red'><?php echo $exibe['ID_livro']; ?></font> </li>  <input type="hidden" name="ID_livro"  value="<?php echo $exibe['ID_livro']; ?>" required/> </li> </td></td>
									</div>
								</div>
							</tr>






							<tr>	
								<div class="row data">	
								<div class="col-9">
																														
								<td> <li><b>	<label for="form_isbn" >ISBN<span class="asterisk" >*</span>:</label> </b> 	</td> 
														
								<td>
								
									<input id="form_isbn" type="text"
									data-blank="ISBN não preenchido"
									data-invalid="ISBN inválido"
									name="isbn" maxlength="16" value="<?php echo $exibe['isbn']; ?>"
									placeholder="Ex: 9788532511010 "
									autocomplete="no"
									/> <br /> </li> </td>

								</div>
								</div>
							</tr>
					

							<tr>								
							<div class="col-9">
									<div class="row data">
										<td> <li><b>Nome do Livro<span class="asterisk">*</span>: </b> </td>
										<td> <input type="Nome do livro" name="titulo"  placeholder="Ex: Harry Potter e a Pedra Filosofal" size="50" maxlength="100" value="<?php echo $exibe['titulo']; ?>" required/> </li> </td>
									</div>
								</div>
							</tr>

							<tr>
								<div class="col-9">	
									<div class="row data">
										<td> <li> <b>Autor*: </b> </td>
										<td><input type="Autor" name="autor" placeholder="Ex: J K Rowling S/ PONTOS" size="50" value="<?php echo $exibe['autor']; ?>" required/> </li> </td> 
									</div>
								</div>
							</tr>


							<tr>
									<div class="row data">
										<div class="col-9">
											<td><li> <b><label for="editora">Editora<span class="asterisk">*</b></span>:</label></td>							
											<td> <input type="Editora" name="editora" placeholder="Ex: Rocco" maxlength="30" value="<?php echo $exibe['editora']; ?>"
                                    		required autocomplete="no" size="50"
                                   			data-empty="Editora não preenchida."
											data-name="Editora - preenchimento incorreto. Coloque apenas o nome da editora, \n sem repetir 'Editora'. \n  Ex: digite simplesmente 'Cortez', ao invés de 'Cortez Editora'"/> </li>
											</td>
										</div>			
									</div>
						   </tr>

							<tr>
									<div class="row data">
									<div class="col-9">
									<td>	<li> <b>	<label for="form_estante">Estante<span class="asterisk">*</span>:</label></b>
									</td>

									<td>
										
											<select id="form_estante" name="estante" class="custom_select"
											data-empty="Estante não selecionada. Escolha uma estante de destino para o seu livro."
											required >
											<div class="col-9">	
											<option value="<?php echo $exibe['estante']; ?>" size="50" selected="selected"> <?php echo $exibe['estante'];  ?>  </option>
																			<option value="Administração" >
												Administração
											</option>
																			<option value="Agricultura" >
												Agricultura
											</option>
																			<option value="Antropologia" >
												Antropologia
											</option>
																			<option value="Arqueologia" >
												Arqueologia
											</option>
																			<option value="Arquitetura" >
												Arquitetura
											</option>
																			<option value="Artes" >
												Artes
											</option>
																			<option value="Artesanato" >
												Artesanato
											</option>
																			<option value="Astronomia" >
												Astronomia
											</option>
																			<option value="Auto Ajuda" >
												Auto Ajuda
											</option>
																			<option value="Biografias" >
												Biografias
											</option>
																			<option value="Biologia" >
												Biologia
											</option>
																			<option value="Botânica" >
												Botânica
											</option>
																			<option value="Brasil" >
												Brasil
											</option>
																			<option value="Cinema" >
												Cinema
											</option>
																			<option value="Ciência Política" >
												Ciência Política
											</option>
																			<option value="Ciências Exatas" >
												Ciências Exatas
											</option>
																			<option value="Coleções" >
												Coleções
											</option>
																			<option value="Comportamento" >
												Comportamento
											</option>
																			<option value="Comunicação" >
												Comunicação
											</option>
																			<option value="Contabilidade" >
												Contabilidade
											</option>
																			<option value="Contos" >
												Contos
											</option>
																			<option value="Crítica Literária" >
												Crítica Literária
											</option>
																			<option value="Culinária" >
												Culinária
											</option>
																			<option value="Decoração" >
												Decoração
											</option>
																			<option value="Dicionários" >
												Dicionários
											</option>
																			<option value="Didáticos" >
												Didáticos
											</option>
																			<option value="Direito" >
												Direito
											</option>
																			<option value="Documentos" >
												Documentos
											</option>
																			<option value="Ecologia" >
												Ecologia
											</option>
																			<option value="Economia" >
												Economia
											</option>
																			<option value="Enciclopédias" >
												Enciclopédias
											</option>
																			<option value="Engenharia" >
												Engenharia
											</option>
																			<option value="Ensino de Idiomas" >
												Ensino de Idiomas
											</option>
																			<option value="Esoterismo" >
												Esoterismo
											</option>
																			<option value="Esportes" >
												Esportes
											</option>
																			<option value="Ficção Científica" >
												Ficção Científica
											</option>
																			<option value="Filosofia" >
												Filosofia
											</option>
																			<option value="Folclore" >
												Folclore
											</option>
																			<option value="Fotografia" >
												Fotografia
											</option>
																			<option value="Genealogia" >
												Genealogia
											</option>
																			<option value="Geografia" >
												Geografia
											</option>
																			<option value="Gibis" >
												Gibis
											</option>
																			<option value="Guerra" >
												Guerra
											</option>
																			<option value="História Geral" >
												História Geral
											</option>
																			<option value="História do Brasil" >
												História do Brasil
											</option>
																			<option value="Hobbies" >
												Hobbies
											</option>
																			<option value="Humor" >
												Humor
											</option>
																			<option value="Infanto Juvenis" >
												Infanto Juvenis
											</option>
																			<option value="Informática" >
												Informática
											</option>
																			<option value="Jogos" >
												Jogos
											</option>
																			<option value="Jornais" >
												Jornais
											</option>
																			<option value="Linguística" >
												Linguística
											</option>
																			<option value="Literatura Brasileira" >
												Literatura Brasileira
											</option>
																			<option value="Literatura Estrangeira" >
												Literatura Estrangeira
											</option>
																			<option value="Livros Raros" >
												Livros Raros
											</option>
																			<option value="Manuscritos" >
												Manuscritos
											</option>
																			<option value="Medicina" >
												Medicina
											</option>
																			<option value="Moda" >
												Moda
											</option>
																			<option value="Música" >
												Música
											</option>
																			<option value="Outros Assuntos" >
												Outros Assuntos
											</option>
																			<option value="Pecuária" >
												Pecuária
											</option>
																			<option value="Pedagogia" >
												Pedagogia
											</option>
																			<option value="Pintura" >
												Pintura
											</option>
																			<option value="Poesia" >
												Poesia
											</option>
																			<option value="Psicologia" >
												Psicologia
											</option>
																			<option value="Religião" >
												Religião
											</option>
																			<option value="Revistas" >
												Revistas
											</option>
																			<option value="Saúde" >
												Saúde
											</option>
																			<option value="Sexualidade" >
												Sexualidade
											</option>
																			<option value="Sociologia" >
												Sociologia
											</option>
																			<option value="Teatro" >
												Teatro
											</option>
																			<option value="Turismo" >
												Turismo
											</option>
																		</select>
										
											</td>							
											</div>

									</div>
								</tr>

										
								
									<tr>
										<div class="row data">
											<div class="col-9">
											<td> <b>	<li> <label for="form_idioma">Idioma:</label></li> </b> 
											</td> 
											</div>

											<td>
										
												<select id="form_idioma" name="idioma" class="custom_select" value="<?php echo $exibe['idioma']; ?>" selected="selected">
																					<option value="De" >
														Alemão
													</option>
																					<option value="Ch" >
														Chinês
													</option>
																					<option value="Co" >
														Coreano
													</option>
																					<option value="Da" >
														Dinamarquês
													</option>
																					<option value="Es" >
														Espanhol
													</option>
																					<option value="Fr" >
														Francês
													</option>
																					<option value="El" >
														Grego
													</option>
																					<option value="He" >
														Hebraico
													</option>
																					<option value="Ho" >
														Holandês
													</option>
																					<option value="Hu" >
														Húngaro
													</option>
																					<option value="En" >
														Inglês
													</option>
																					<option value="It" >
														Italiano
													</option>
																					<option value="Jp" >
														Japonês
													</option>
																					<option value="La" >
														Latim
													</option>
																					<option value="Pl" >
														Polonês
													</option>
																					<option value="Pt" selected="selected">
														Português
													</option>
																					<option value="Ru" >
														Russo
													</option>
													</select>
													</td>
											</div>
										</div>
				            	</tr>

							<tr>
								<div class="row data">
									<div class="col-9">
										<td><li> <label for='estado'>  <b>Estado do Livro<span class="asterisk" >*</span> </b> </label>:  </td> 
									
											<td><select name="estado" id="estado" required > </li> 
												<option value="<?php echo $exibe['estado']; ?>" selected="selected" > <?php echo $exibe['estado']; ?></option>
										<option value="Novo">Novo</option> 
							
										<option value="Usado - Como Novo">Usado - Como Novo</option>
							
										<option value="Usado - Bom Estado">Usado - Bom Estado</option>
							
										<option value="Usado - Aceitável">Usado - Aceitável</option>
										</select>
											</td>
									<br />
								</div>
							</div>
						    </tr>


						    <tr>
							<div class="row data">
									<div class="col-9">
									<td><li> <b>Quantidade<span class="asterisk" >*</span>: </b> </td>
									<td>	<input type="Quantidade" name="quantidade" placeholder="Ex: 10 - Só número inteiro" size="20"  maxlength="5" value="<?php echo $exibe['quantidade']; ?>" required /> </li> </td>
								</div>		
								</div>	
                            </tr>
                            
                            <tr>
							<div class="row data">
									<div class="col-9">
									<td><li> <b><font color='blue'>Preço de Venda:</font> </> </b> </td>
                                    <td> <input type="Preço" name="preco_venda" placeholder="Ex: 10,00" size="20"   maxlength="7" value="<?php echo $exibe['preco_venda']; ?>" required/>  </li> </td>
                                    </div>
                                </div>
                            </tr>
										
							<tr>
								
									<div class="row data">
									<div class="col-9">
											<td><li> <b><font color='red'>Preço de Custo:</font> </> </b> </td>
											<td>	<input type="text" name="preco_custo" placeholder="Ex: 9,99" maxlength="7" value="<?php echo $exibe['preco_custo']; ?>"/></li> </td>
								</div>
							</div>
    						</tr>

                            <tr>
                                <div class="row data">
                                    <div class="col-9">
                                        <td><li> <b>Ano: </b> </td>
                                        <td>	<input type="Ano" name="ano" placeholder="Ex: 2001" size="20" maxlength="4" value="<?php echo $exibe['ano']; ?>" /></li> </td>
                                    </div>
                                </div>
                            </tr>

							<tr>
							<div class="row data">
								<div class="col-9">
									<td><li> <b>Edição:</b> </td>
									<td>	<input type="edicao" name="edicao" placeholder="No lugar de 1ª colocar 1 " size="20"  maxlength="3" value="<?php echo $exibe['edicao']; ?>" /> <br /> </li> </td>
								</div>
							</div>
						    </tr>
						
                            <tr>
                                <div class="row data">
                                    <div class="col-9">
                                        <td><li> <b>Peso<span class="asterisk" >*</span>:</b> </td>
                                        <td>	<input type="peso" name="peso" placeholder="Gramas Ex: 1000 para 1kg" size="20"  maxlength="4" value="<?php echo $exibe['peso']; ?>" required/> <br /> </li> </td>
                                    </div>
                                </div>
                            </tr>
                            
			                        <tr>
									<div class="row data">
									<div class="col-9">
										<td><li><b> Descrição do livro:</b></td>
						
										<td> <p> <i>Aqui você deve descrever o livro conforme o estado de conservação dele.</p>
											 Se estiver amarelado, com páginas amassadas, grifos, assinaturas e/ou anotações.  <br />
						 				<p>P.S.: Sugiro que termine sempre a descrição com a seguinte frase:  <br /> </p> 
										  <b> "Mas nada que impeça uma leitura prazerosa"</b></i> <br>

                                    <textarea rows="4" placeholder="Ex: Livro com capa amassada, lateral rasgada, e amarelada, marcas de uso, assinatura do último dono, e autógrafo autor. Mas nada que impeça uma leitura prazerosa." name='descricao' width="100" value="<?php echo $exibe['descricao']; ?>" > </textarea><br /><br /> </li>
                                </td>

                                </div>
                                    </div>
                                    
                                        
                                    
                            </div>
                        </tr>

                        <tr>

						<div class="row data">
									<div class="col-9">
                                <td><li> <b>	<label for="capa">Capa: </label> </b></td>
                                </div>
                                </div>
                        
                
								<div class="row data">
									<div class="col-9">
							
										
											<td>	<b> <span class="upload-box-title">Selecione uma capa para enviar </span>  </b> 
								</br>
								<br />
											<input id="capa" accept=".png, .jpg" type="file" name="capa" value="" style="float: center;"
											data-buttonText="Escolher imagem" data-icon="false"
											data-format="Por favor, utilize um arquivo no formato PNG ou JPG de até 5MB para o upload da imagem."
											/> </li>


                                                <div class="tooltip">
                                                        <p>
                                                            Faça o upload do arquivo .png ou .jpg com a foto da capa do livro.
                                                            O tamanho da imagem não deve ultrapassar 5 Mb.
															</p>
												</div>	

											</div>	
										</div>
							
						
								</div>
								</div>
								</div>

							
							
					
				
				</td>
				</tr>

					<tr>
						<div class="col-9">
						                           
                        <td> <p><h5>Editar Cadastro</h5></p>  
							<input type="submit" value="Salvar"  />
                        </td>
						</div>
					</tr>

					</ul>	
					
					</div>
										
				</table>
			</form>
			
					
		
	</div>
</div>
</div>
</div>



</main>

<div id="copy-area">
		<div class="container">
		  <div class="row">
			  <div class="col-md-12">
			<p>Desenvolvido por <a href="https://www.n-s-tecnologia.webnode.com" target="_blank">N&S - Tecnologia</a> © 2020</p>
		  </div>
	  </div>
	</div>
  </div>
</div>
</body>

</html>