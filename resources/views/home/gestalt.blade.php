@extends('layouts.main')

@section('javascript-top')
    <script>
        var showLogo = true;
    </script>
@stop

@section('contents')
    <!--our work section start here-->
    <section id="work" class="padding-80-internal">
        <!--testimonials-->
        <div id="team" class="work-section-2 section-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center margin-btm-40">
                        <div class="section-heading text-center">
                            <h2 class="large section-title">Gestalt terapia</h2>
                        </div>
                    </div>
                </div><!--.row-->
                <div class="row">
                    <div class="col-sm-12 internal">
                        @include('home.partials.gestalt')
                    </div><!--team-col-->
                </div>
            </div><!--.container-->
        </div><!--team section end-->
    </section><!--#work-section-->

    <!--our work section end-->
@stop
