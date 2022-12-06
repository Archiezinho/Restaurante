
<?php 

include('includes/header.php');
include('classes/conexao.php');

?>
<?php 
$codigo = $_GET['prato'];

$sql = "SELECT * FROM tb_pratos WHERE codigo='$codigo'";

$result = $conexao->query($sql);

$dados = $result->fetch_assoc();

?>

		<div class="ghost-element">
		</div>
           
        <div class="product-page small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">

                <div class="product-section">
                    <div class="product-info small-12 large-5 columns no-padding">
                        <h3><?php echo $dados['nome']?></h3>
                        <h4><?php echo $dados['categoria']?></h4>
                        <p><?php echo $dados['descricao']?></p>

                        <h5><b>Preço: </b><?php echo $dados['preco']?></h5>
                        <h5><b>Calorias: </b><?php echo $dados['caloria']?></h5> 
                    </div>

                    <div class="product-picture small-12 large-7 columns no-padding">
                        <img src="img/cardapio/<?php echo $dados['codigo']?>.jpg" alt="cheesecake de cereja">
                    </div>

                </div>

                <div class="go-back small-12 columns no-padding">
                    <a href="cardapio.html"><< Voltar ao Cardápio</a>
                </div>

            </div>
        </div>
            


        <footer id="footer" class="small-12 columns no-padding">

            <div class="global-page-container">

                <div class="small-11 small-centered large-12 columns footer-section">

                    <div class="follow-us small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Siga-nos</h4>
                        <a href="http://www.facebook.com"><img src="img/social-icons/facebook.svg" alt="facebook-icon"></a>
                        <a href="http://www.twitter.com"><img src="img/social-icons/twitter.svg" alt="facebook-icon"></a>
                        <a href="http://www.instagram.com"><img src="img/social-icons/instagram.svg" alt="facebook-icon"></a>
                    </div>
                    
                    <div class="contato small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Contato</h4>
                        <p>
                            Avenida Conselheiro Nébias, 308<br>
                            Santos/SP<br>
                            T. 13-3633-3333<br>
                            contato@restobar.com.br
                        </p>
                    </div>
                    
                    <div class="horario small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Horários</h4>
                        <p><span class="horario-aberto">(Aberto Agora)</span><br>
                        Seg-Sex: 11h30 - 24h00<br>
                        Sábado 11h30 - 02h00<br>
                        Domingo 11h30 - 18h</p>
                    </div>
                    
                    <div class="como-chegar small-5 medium-3 small-offset-1 medium-offset-0 columns">
                        <h4 class="footer-section-title">Como chegar</h4>
                        <div id="map"></div>
                    </div>
                    
                    <hr></hr>
                    
                    <div class="copyright small-12 columns">
                    
                        2017 &copy; Todos os direitos reservados
                    
                    </div>
                </div>
            
            </div>

<?php

include 'includes/footer.php';

?>