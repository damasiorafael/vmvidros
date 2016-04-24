<?php
    include("inc/config.php");
    $pag = "empresa";
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
                    <div class="content-empresa span6">
                        <h2>Conhecendo a <strong>Empresa</strong></h2>
                        <img class="pull-right" src="images/img_pag_empresa.png" />
                    </div>
                    <div class="content-produtos span6 pull-right">
                        <p>
                            A vidraçaria millenium abriu suas portas em 2004. Os sócios já apresentavam vasta experiência no ramo de vidros e decidiram então unir forças para abrir a empresa. Nestes anos de atendimento, buscamos sempre oferecer um atendimento personalizado, produtos com qualidade, cumprindo prazos e com custo compatível de mercado. Oferecemos serviços de projetos e instalação de vidros temperados, fechamento de sacadas, coberturas, box e toda linha de espelhos e tampos para decoração de interiores e exteriores. Contamos com profissionais habilitados para prestar os melhores serviços, atendendo as especificações de arquitetos, engenheiros, construtoras, para garantir qualidade, conforto e segurança.
                        </p>
                        <div class="botao-servicos pull-right">
                            <a href="">Conheça Nossos Serviços</a>
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