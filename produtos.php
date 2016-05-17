<?php
    include("inc/config.php");
    $pag = "produtos";
    $categoria = "";
    if(isset($_REQUEST["cat"])){
        $categoria = $_REQUEST["cat"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<!-- UI -->
<link href="css/jquery-ui.css" rel="stylesheet">

<body id="<?php echo $pag; ?>">

    <?php include("inc/header.php"); ?>

    <section class="body">
        <div class="corpo-conteudo">
            <div class="container">
                <div class="content content-home col-aceitos-menu">
                    <div class="content-empresa desc-produtos">
                        <h2>Produtos <strong>& Serviços</strong></h2>
                        <p>
                            Sugestões e a melhor orientação em vidros e espelhos para arquitetura e decoração. Profissionais altamente qualificados, acompanhando e manipulando todas as fases e processos em que são submetidos os espelhos, vidros laminados, temperados e jateados.
                        </p>
                    </div>
                    <div class="content-produtos imagens-produtos">
                        <div class="box-group" id="accordion">
                            <?php
                                $sqlCats = "SELECT * FROM categorias ORDER BY id ASC";
                                $resultCats = $PDO->query($sqlCats);
                                while($consultaCats = $resultCats->fetch(PDO::FETCH_OBJ)){
                            ?>
                                    <!-- AREAS COLLAPSED -->
                                    <div class="panel box box-primary panel-aceitos-menu selectedCat">
                                        <div class="box-header with-border header-aceitos-areas">
                                            <h4 class="box-title">
                                                <a class="setaController collapsed" aria-expanded="false" data-toggle="collapse" data-parent="#accordion" href="#area<?php echo $consultaCats->id; ?>">
                                                    <img src="uploads/img9.jpg">
                                                </a>
                                            </h4>
                                        </div>
                                        <div style="" aria-expanded="false" id="area<?php echo $consultaCats->id; ?>" class="panel-collapse panel-colapse-cats collapse">
                                            <div class="box-body">
                                                <ul class="nav navbar-nav navbar-aceitos-cats lista-imagens-produtos">
                                                    <?php
                                                        $sql = "SELECT * FROM produtos WHERE id_categoria = $consultaCats->id ORDER BY id ASC";
                                                        $result = $PDO->query($sql);
                                                        while($consulta = $result->fetch(PDO::FETCH_OBJ)){
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
                                                                    data-lightbox="<?php echo $consulta->id_categoria; ?>"
                                                                >
                                                                    <img src="uploads/<?php echo $consulta->imagem; ?>" />
                                                                </a>
                                                            </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- AREAS COLLAPSED -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php include("inc/mapa.php"); ?>
    </section>

    <?php include("inc/footer.php"); ?>

</body>
</html>