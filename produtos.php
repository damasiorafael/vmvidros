<?php
    include("inc/config.php");
    $pag = "produtos";
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body id="<?php echo $pag; ?>">

    <?php include("inc/header.php"); ?>

    <section class="body">
        <div class="corpo-conteudo">
            <div class="container">
                <div class="content content-home">
                    <div class="content-empresa desc-produtos">
                        <h2>Produtos <strong>& Serviços</strong></h2>
                        <p>
                            Sugestões e a melhor orientação em vidros e espelhos para arquitetura e decoração. Profissionais altamente qualificados, acompanhando e manipulando todas as fases e processos em que são submetidos os espelhos, vidros laminados, temperados e jateados.
                        </p>
                        <div class="lista-produtos-pag-produtos">
                            <ul class="lista-produtos-home pull-left">
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
                            </ul>
                            <ul class="lista-produtos-home pull-right">
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
                        </div>
                    </div>
                    <div class="content-produtos imagens-produtos">
                        <ul class="lista-imagens-produtos">
                            <?php
                                if($_SERVER['SERVER_NAME'] == "vmvidros.rafaeldamasio.com.br"){
                                    $sql = "SELECT * FROM programadores";
                                    $result = $PDO->query( $sql );
                                    while($rows = $result->fetchAll()){
                            ?>
                                        <li>
                                            <a
                                                href="uploads/<?php echo $consulta->imagem; ?>"
                                                <?php
                                                    if($consulta->titulo != ""){
                                                ?>
                                                        title="<?php echo $consulta->titulo; ?>"
                                                        data-title="<?php echo $consulta->titulo; ?>"
                                                <?php } ?>
                                                data-lightbox="produtos"
                                            >
                                                <img src="uploads/<?php echo $consulta->imagem; ?>" />
                                            </a>
                                        </li>
                            <?php
                                    }
                                } else {                                
                                    $sql = "SELECT * FROM produtos ORDER BY id ASC";
                                    $result = consulta_db($sql);
                                    while($consulta = mysql_fetch_object($result)){ 
                            ?>
                                        <li>
                                            <a
                                                href="uploads/<?php echo $consulta->imagem; ?>"
                                                <?php
                                                    if($consulta->titulo != ""){
                                                ?>
                                                        title="<?php echo $consulta->titulo; ?>"
                                                        data-title="<?php echo $consulta->titulo; ?>"
                                                <?php } ?>
                                                data-lightbox="produtos"
                                            >
                                                <img src="uploads/<?php echo $consulta->imagem; ?>" />
                                            </a>
                                        </li>
                            <?php
                                    }
                                }
                            ?>
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