<!--section services start here-->

<section id="services" class="padding-80">
    <div class="services-section-1">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="small section-title"><span>O que a gente faz?</span></h4>
                <h2 class="large section-title">Nossos Serviços</h2>
            </div><!--section heading-->
        </div><!--container-->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="margin-btm-40">
                        <h4>Psicoterapia é o que fazemos</h4>
                        <p>
                            O Núcleo Constelar é um espaço de psicologia que conta com serviços de atendimento em psicoterapia para crianças, adultos e idosos, além de oficinas e workshops organizado pelas psicólogas Aline Amorim e Andrelia Guimarães. Agende sua entrevista!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.3s">
                    <div class="row margin-btm-20">
                        <div class="col-md-2">
                            <div class="services-icon">
                                <i class="fa fa-street-view"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="services-info">
                                <h3 class="color-green">Psicoterapia Individual</h3>
                                @include('home.partials.psicoterapia-individual')
                            </div>
                        </div>
                    </div><!--.services row end-->
                    <div class="row margin-btm-20">
                        <div class="col-md-2">
                            <div class="services-icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="services-info">
                                <h3 class="color-green">Psicoterapia em Grupo</h3>
                                <p>
                                    @include('home.partials.psicoterapia-grupo')
                                </p>
                            </div>
                        </div>
                    </div><!--.services row end-->
                    <div class="row margin-btm-20">
                        <div class="col-md-2">
                            <div class="services-icon">
                                <i class="fa fa-eye"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="services-info">
                                <h3 class="color-green">Intervisão</h3>
                                @include('home.partials.intervisao')
                            </div>
                        </div>
                    </div><!--.services row end-->


                </div>

                <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">
                    <div class="row margin-btm-20">
                        <div class="col-md-2">
                            <div class="services-icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="services-info">
                                <h3 class="color-green">Palestras, oficinas e workshops</h3>
                                @include('home.partials.palestras')
                            </div>
                        </div>
                    </div><!--.services row end-->
                    <div class="row margin-btm-20">
                        <div class="col-md-2">
                            <div class="services-icon">
                                <i class="fa fa-share-alt"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="services-info">
                                <h3 class="color-green">Compartilhamento de Salas</h3>
                                <p>
                                    Entendemos que parcerias em psicologia são um caminho construtivo para troca de conhecimento. Por isso investimos em uma sala para sublocação, pois esperamos receber profissionais que nos auxiliem na construção de um espaço de qualidade e referência no atendimento em psicologia. Venha conhecer nosso espaço!
                                </p>
                            </div>
                        </div>
                    </div><!--.services row end-->
                    <div class="row margin-btm-20">
                        <div class="col-md-2">
                            <div class="services-icon">
                                <i class="fa fa-wechat"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="services-info">
                                <h3 class="color-green">Clínica Social</h3>
                                <p>
                                    <p>Compreendemos nosso dever social e escolhemos dispor de alguns horários para atendimento em clínica social. Ou seja, clientes que buscam atendimento psicológico e não tem a possibilidade de arcar com o custo integral de uma psicoterapia, tem a oportunidade de iniciar os atendimentos de acordo com um custo acertado na primeira entrevista de avaliação. Cada situação é avaliada individualmente, de acordo com a disponibilidade de horários do psicólogo e da possibilidade do cliente que busca atendimento.</p>
                                    <p>Caso tenha interesse em realizar uma entrevista para atendimento social, entre em contato conosco para agendar.</p>
                                </p>
                            </div>
                        </div>
                    </div><!--.services row end-->
                </div>
            </div>
        </div>
    </div><!--services section 1 end-->

    @include('home.partials.newsletter')
</section>
<!--section services end here-->
