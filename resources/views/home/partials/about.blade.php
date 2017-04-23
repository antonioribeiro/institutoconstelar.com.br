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
                    <div class="about-box wow animated fadeInDown" data-wow-duration="0.3s">
                        <div class="about-box-icon">
                            <i class="fa fa-book"></i>
                        </div>
                        <div class="about-box-text">
                            <h4>Nossa história</h4>
                            <p>
                                O espaço surgiu da parceria entre as psicólogas Andrelia Guimarães e Aline Amorim, que após alguns anos trabalhando juntas em oficinas e workshops, acreditaram que havia chegado o momento de construir "um lugar para chamar de nosso". Em pouco tempo o Núcleo Constelar já possuía endereço e em 05 de janeiro de 2016 iniciou suas atividades.
                                Pensado inicialmente como um espaço para atendimento em psicoterapia, a ideia se ampliou e construimos um espaço para receber também outros profissionais de psicologia, oficinas, workshops, psicoterapia de grupo, entre outros.
                                O sentido da palavra “constelar" nos trouxe o nome que hoje batiza o nosso espaço. Um espaço para reunir, juntar, honrar, cobrir-se de estrelas. Buscamos construir um lugar de troca e crescimento, e daí surgiu o Núcleo Constelar.
                                Nosso logotipo foi pensado como uma árvore, construída a partir de pessoas reunidas em busca de bem estar. Uma árvore de raízes profundas, e com galhos extensos, capaz de comportar grande diversidade de pessoas e ideias.
                                Venha conhecer o Núcleo Constelar. Será um prazer receber você!
                            </p>
                        </div>
                    </div><!--about us box end-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-box wow animated fadeInDown" data-wow-delay="0.5">
                        <div class="about-box-icon">
                            <i class="fa fa-gittip"></i>
                        </div>
                        <div class="about-box-text">
                            <h4>Gestalt terapia</h4>
                            @include('home.partials.gestalt')
                        </div>
                    </div><!--about us box end-->
                </div>
            </div><!--about services row end-->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-box wow animated fadeInDown" data-wow-delay="0.6s">
                        <div class="about-box-icon">
                            <i class="fa fa-street-view"></i>
                        </div>
                        <div class="about-box-text">
                            <h4>Psicoterapia</h4>
                            @include('home.partials.psicoterapia-individual')
                        </div>
                    </div><!--about us box end-->
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-box wow animated fadeInDown" data-wow-delay="0.8s">
                        <div class="about-box-icon">
                            <i class="fa fa-connectdevelop"></i>
                        </div>
                        <div class="about-box-text">
                            <h4>Constelação Familiar</h4>
                            @include('home.partials.constelacoes')
                        </div>
                    </div><!--about us box end-->
                </div>
            </div><!--about services row end-->
        </div>
    </div>

    @include('home.partials.phrase')

    <!--page about content end here-->
</section>
<!--about section end here-->
