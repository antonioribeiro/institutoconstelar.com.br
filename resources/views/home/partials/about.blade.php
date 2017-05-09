<section id="about" class="padding-80">
    <!--about page content-->
    <div class="about-section">
        <div class="container">
            <div class="section-heading text-center">
                <h4 class="small section-title"><span>A gente ama o que faz!</span></h4>
                <h2 class="large section-title">Sobre Nós</h2>
            </div><!--section heading-->
            <div class="person">
                <img src="/img/aline-andrelia.jpg" class="img-responsive" alt="">
            </div>
        </div><!--container-->

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    @include('home.partials.nossa-historia')
                </div>

                <div class="col-md-6 col-sm-6">
                    @include('home.partials.gestalt')
                    @include('home.partials.constelacoes')
                </div>
            </div><!--about services row end-->

            <div class="row">
            </div><!--about services row end-->
        </div>
    </div>

    @include('home.partials.phrase')

    <!--page about content end here-->
</section>
<!--about section end here-->
