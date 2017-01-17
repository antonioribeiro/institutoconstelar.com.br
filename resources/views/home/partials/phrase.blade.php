<div class="purchase-now parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-1">
                <h1 class="wow animated fadeInLeft pull-right" data-wow-delay="0.3s">“{{ ($phrase = App\Phrases::random())['phrase'] }}” </h1>
            </div>
            <div class="col-sm-8 col-sm-offset-1">
                <h4 class="wow animated fadeInLeft pull-right" data-wow-delay="0.3s">{{ $phrase['author'] }}</h4>
            </div>
        </div>
    </div>
</div>
