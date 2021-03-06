<?= $this->Html->css('grid.css') ?>
<?= $this->Html->css('css-old/animate.css') ?>
<?= $this->Html->css('css-old/bootstrap.css') ?>
<?= $this->Html->css('css-old/estilo.css') ?>
<?= $this->Html->css('css-old/style.css') ?>
<?= $this->Html->css('css-old/responsive.css') ?>

<section class="content">

    <br><br>

    <div class="container">

        <div class="col-md-6">

            <div class="tab-pane fade in active" id="tab-4">
                <h4 class="classic-title"><span>Resíduos sólidos </span></h4>
                <p>
                    A QUALITEX está engajada apoiando a Política Nacional de Resíduos
                    Sólidos resultante de atividades humanas no âmbito urbano, industrial e
                    zona rural.  A caracterização analítica dos resíduos possibilita
                    racionalidade nas tomadas decisão e avanços tecnológicos relacionados
                    ao destino a ser dado aos resíduos classificados como perigosos ou não
                    perigosos. A partir da avaliação dos resíduos a luz os princípios ambientais,
                    ações são tomadas resultando como benefícios socioeconômicos e ambientais;
                    mais reaproveitamentos e reciclagens, e menos consumo energético, geração de
                    rejeitos, poluição de solo, água e ar.
                </p>
                <p>
                    As NBR 10004, 10005, 10006 tratam, respectivamente, da avaliação do
                    resíduo bruto, chamado "Massa Bruta", da avaliação do lixiviado e do
                    solubilizado da massa bruta. Desta forma, as três normas propõem critérios
                    para análise e classificação de resíduos industriais, os quais norteiam a sua destinação final.
                    A NBR 12.808 estabelece critérios gerais para resíduos de serviços de saúde, e
                    remete para a NBR 10.004 no que tange a parte analítica. Nosso laboratório
                    oferece todo o suporte para coleta, caracterização e destinação final de
                    todos os resíduos sólidos e semi-sólidos.
                </p>
            </div>

        </div>

        <div class="col-md-6">

            <div class="wrapper">
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>
                <div class="column">
                    <div class="inner"></div>
                </div>

            </div>

        </div>

    </div>

    <br><hr>

    <div class="container">

        <div class="col-md-12">

            <h4 class="classic-title"><span>Outras Análises</span></h4>

            <div class="row">

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-bullseye icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Alimentos e Swabs'), array('action' => 'food-and-swabs')); ?>
                        </h4>
                        <p>
                            A QUALITEX está engajada apoiando a Política Nacional de Alimentação e Nutrição. A caracterização dos alimentos e suporte analítico...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'food-and-swabs')); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-shopping-cart icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Combustível automotivo'), array('action' => 'automotive-fuels')); ?>
                        </h4>
                        <p>
                            A QUALITEX tem atuando expressivamente no monitoramento da qualidade dos combustíveis automotivos através de análises químicas
                            e físico-químicas especificadas nas Resoluções da Agência Nacional do Petróleo, Gás Natural e Combustível - ANP.
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'automotive-fuels')); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-users icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Qualidade do Ar e Emissões Atmósféricas'), array('action' => 'air-quality-and-gas-emissions')); ?>
                        </h4>
                        <p>
                            A Qualitex busca atender nossos clientes prezando pelo desenvolvimento sustentável...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'air-quality-and-gas-emissions')); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-cubes icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Saúde ocupacional'), array('action' => 'occupational_health')); ?>
                        </h4>
                        <p>
                            Os ambientes de trabalho possuem regulamentações relacionadas a exposição dos trabalhadores a agentes físicos, químicos e biológicos. Através de medições
                            e monitoramentos analíticos a QUALITEX tem apoiado o Plano Nacional de Segurança e Saúde no Trabalho com seus préstimos de serviços na verificação de...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'occupational_health')); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <br><br>

    </div>

</section>

<style media="screen">

.wrapper .column:nth-child(1) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/1.jpg');
}
.wrapper .column:nth-child(2) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/2.jpg');
}
.wrapper .column:nth-child(3) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/3.jpg');
}
.wrapper .column:nth-child(4) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/4.jpg');
}
.wrapper .column:nth-child(5) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/5.jpg');
}
.wrapper .column:nth-child(6) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/6.jpg');
}
.wrapper .column:nth-child(7) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/7.jpg');
}
.wrapper .column:nth-child(8) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/8.jpg');
}
.wrapper .column:nth-child(9) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/9.jpeg');
}
.wrapper .column:nth-child(10) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/10.jpg');
}
.wrapper .column:nth-child(11) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/11.jpg');
}
.wrapper .column:nth-child(12) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/12.jpg');
}
.wrapper .column:nth-child(13) .inner {
    background-image: url('..//webroot/img/grids/solid-waste/13.jpg');
}
</style>
