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
                <h4 class="classic-title"><span>Combustível automotivo</span></h4>
                <p>
                    A QUALITEX tem atuando expressivamente no monitoramento da qualidade dos combustíveis automotivos através de análises químicas e físico-químicas especificadas nas Resoluções da Agência Nacional do Petróleo, Gás Natural e Combustível - ANP.
                    <br>
                    <br>Estas especificações estabelecem limites para cada característica, de modo a assegurar a qualidade do combustível, principalmente Gasolina, Diesel, Biodiesel e Etanol, produzido, transportado e distribuído.
                    <br>
                    <br>Um combustível que não atenda aos requisitos mínimos especificados, ou seja, em não conformidade com as especificações regulamentadas pela ANP, acarreta danos ao motor e a outros componentes do veículo, redução no rendimento, perda de potência, aumento do consumo e impactando com agravamento a qualidade do ar gerando prejuízos ao meio ambiente e a saúde pública em função do aumento na emissão de gases e material particulado.
                    <br>
                    <br>Como Clientes do Laboratório QUALITEX, contratando a coleta e análises em amostras, proprietários de veículos e de postos distribuidores buscam através do monitoramento do combustível certificar-se da boa qualidade dos produtos comercializados, bem como  detectar eventuais contaminações acidentais ou até mesmo adulterações para adotar as providências de regularização.
                </p>
                <br>

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

    <hr>

    <div class="container">

        <div class="col-md-12">

            <h4 class="classic-title"><span>Outras Análises Ambientais</span></h4>

            <div class="row">

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-bullseye icon-medium"></i>
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
                        <i class="fa fa-shopping-cart icon-medium"></i>
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
                        <i class="fa fa-users icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Saúde Ocupacional'), array('action' => 'occupational-health')); ?>
                        </h4>
                        <p>
                            O Condicionador de Ar pode ser interessante para manter o ambiente livre da poluição externa, desde que os filtros estejam sempre bem limpos. Em muitos casos, a qualidade do ar de interiores pode ser pior do que a do ar externo...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'occupational-health')); ?>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 service-box service-icon-left-more">
                    <div class="service-icon">
                        <i class="fa fa-cubes icon-medium"></i>
                    </div>
                    <div class="service-content">
                        <h4>
                            <?php echo $this->Html->link(__('Resíduos Sólidos'), array('action' => 'solid-waste')); ?>
                        </h4>
                        <p>
                            Nosso laboratório oferece todo o suporte para coleta, caracterização e destinação final de todos os resíduos sólidos e semi-sólidos...
                            <?php echo $this->Html->link(__('Leia mais'), array('action' => 'solid-waste')); ?>
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>

</section>

<style media="screen">

.wrapper .column:nth-child(1) .inner {
    background-image: url('..//webroot/img/1.png');
}
.wrapper .column:nth-child(2) .inner {
    background-image: url('..//webroot/img/1.png');
}
.wrapper .column:nth-child(3) .inner {
    background-image: url('https://igcdn-photos-g-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11008257_1569363026647030_933015336_n.jpg');
}
.wrapper .column:nth-child(4) .inner {
    background-image: url('https://igcdn-photos-e-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11056045_436886419818172_768672462_n.jpg');
}
.wrapper .column:nth-child(5) .inner {
    background-image: url('https://igcdn-photos-g-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11049260_1374759412847590_258656935_n.jpg');
}
.wrapper .column:nth-child(6) .inner {
    background-image: url('https://igcdn-photos-d-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11005276_1414641038838035_1026684390_n.jpg');
}
.wrapper .column:nth-child(7) .inner {
    background-image: url('https://igcdn-photos-a-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11032879_730451393737672_1900382729_n.jpg');
}
.wrapper .column:nth-child(8) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/11008309_1069768239717639_19410808_n.jpg');
}
.wrapper .column:nth-child(9) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/10919595_795737697170495_727510522_n.jpg');
}
.wrapper .column:nth-child(10) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xfa1/t51.2885-15/11005073_763217610443223_1974563188_n.jpg');
}
.wrapper .column:nth-child(11) .inner {
    background-image: url('https://igcdn-photos-h-a.akamaihd.net/hphotos-ak-xaf1/t51.2885-15/10903752_533893980082103_132962602_n.jpg');
}
.wrapper .column:nth-child(12) .inner {
    background-image: url('https://igcdn-photos-f-a.akamaihd.net/hphotos-ak-xap1/t51.2885-15/10483464_355418301328333_1012884493_n.jpg');
}
.wrapper .column:nth-child(13) .inner {
    background-image: url('https://igcdn-photos-d-a.akamaihd.net/hphotos-ak-xap1/t51.2885-15/10483455_592335754230795_537719826_n.jpg');
}
</style>