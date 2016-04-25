<?php
    include("inc/config.php");
    $pag = "home";
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="<?php echo $pag; ?>">

    <?php include("inc/header.php"); ?>

    <section class="body">
        <?php include("inc/galeria.php"); ?>
        
        <div class="corpo-conteudo">
            <div class="container">
                <div class="content content-home">
                    <div class="content-empresa">
                        <h2>A <strong>Empresa</strong></h2>
                        <p>
                            A empresa oferece serviços de projetos e instalação de vidros temperados, fechamento de sacadas, coberturas, box e toda linha de espelhos e tampos para decoração de interiores e exteriores.
                            <br />
                            <br />
                            Contamos com profissionais habilitados para prestar os melhores serviços, atendendo as especificações de arquitetos, engenheiros, construtoras, para garantir qualidade, conforto e segurança.
                        </p>
                    </div>
                    <div class="content-produtos pull-right">
                        <h2>Produtos <strong>& Serviços</strong></h2>
                        <ul class="lista-produtos-home">
                            <li>
                                <a title="Pisos elevados">Pisos elevados</a>
                            </li>
                            <li>
                                <a title="Sacadas">Sacadas</a>
                            </li>
                            <li>
                                <a title="Coberturas">Coberturas</a>
                            </li>
                            <li>
                                <a title="Box e espelhos">Box e espelhos</a>
                            </li>
                            <li>
                                <a title="Portas e Janelas">Portas e Janelas</a>
                            </li>
                            <li>
                                <a title="Guarda-corpo e corrimãos">Guarda-corpo e corrimãos</a>
                            </li>
                            <li>
                                <a title="Manutenção geral">Manutenção geral</a>
                            </li>
                        </ul>
                        <div class="botao-servicos pull-right">
                            <a href="produtos.php">Nossos Serviços</a>
                        </div>
                    </div>
                    <div class="content-parceiros">
                        <h2>Os Melhores <strong>Parceiros</strong></h2>
                        <ul class="lista-parceiros-home">
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-1.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-2.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-3.jpg" />
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="images/clientes/cliente-4.jpg" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include("inc/mapa.php"); ?>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>