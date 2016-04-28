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
                                    <a href="#" class="showAll <?php if($categoria == ""){ echo "active"; } ?>">Mostrar Todos</a>
                                </li>
                                <?php
                                    $sqlCats = "SELECT * FROM categorias ORDER BY id ASC";
                                    $resultCats = $PDO->query($sqlCats);
                                    while($consultaCats = $resultCats->fetch(PDO::FETCH_OBJ)){
                                ?>
                                        <li>
                                            <a href="produtos.php?cat=<?php echo $consultaCats->id; ?>" rel="<?php echo $consultaCats->id; ?>" title="<?php echo utf8_encode($consultaCats->nome); ?>" class="showCat <?php if($categoria != "" && $consultaCats->id == $categoria){ echo "active"; } ?>" ><?php echo utf8_encode($consultaCats->nome); ?></a>
                                        </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="content-produtos imagens-produtos">
                        <ul class="lista-imagens-produtos">
                            <?php
                                $sql = "SELECT * FROM produtos ORDER BY id ASC";
                                $result = $PDO->query($sql);
                                while($consulta = $result->fetch(PDO::FETCH_OBJ)){
                            ?>
                                    <li rel="<?php echo $consulta->id_categoria; ?>" <?php if($consulta->id_categoria != $categoria){ echo "class='noshow'"; } ?>>
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
                            <?php } ?>
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