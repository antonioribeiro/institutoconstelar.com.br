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
                        <p>
                            O Núcleo Constelar é um espaço de psicologia que conta com serviços de atendimento em psicoterapia para crianças, adultos e idosos, além de oficinas e workshops organizados pelas psicólogas Aline Amorim e Andrelia Guimarães. Agende sua entrevista para atendimento!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 wow animated fadeInLeft" data-wow-delay="0.3s">
                    <div class="row margin-btm-20">
                        @include('home.partials.psicoterapia-individual')
                    </div><!--.services row end-->

                    {{--<div class="row margin-btm-20">--}}
                        {{--@include('home.partials.psicoterapia-grupo')--}}
                    {{--</div><!--.services row end-->--}}

                    <div class="row margin-btm-20">
                        @include('home.partials.clinica-social')
                    </div><!--.services row end-->
                </div>

                <div class="col-md-6 wow animated fadeInRight" data-wow-delay="0.6s">
                    {{--<div class="row margin-btm-20">--}}
                        {{--@include('home.partials.palestras-oficinas')--}}
                    {{--</div><!--.services row end-->--}}

                    <div class="row margin-btm-20">
                        @include('home.partials.sublocacao')
                    </div><!--.services row end-->

                    <div class="row margin-btm-20">
                        @include('home.partials.intervisao')
                    </div><!--.services row end-->
                </div>
            </div>
        </div>
    </div><!--services section 1 end-->

    @include('home.partials.newsletter')
</section>
<!--section services end here-->
