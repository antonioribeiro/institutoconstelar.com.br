@extends('layouts.main')

@section('javascript-top')
    <script>
        var showLogo = true;
    </script>
@stop

@section('contents')
    <!--our work section start here-->
    <section id="work" class="padding-80">
        <!--testimonials-->
        <div id="team" class="work-section-2 section-blue">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>
                            @include('home.partials.constelacoes')
                        </h4>
                    </div><!--team-col-->
                </div>
            </div><!--.container-->
        </div><!--team section end-->

        @include('home.partials.phrase')
    </section><!--#work-section-->

    <!--our work section end-->
@stop

