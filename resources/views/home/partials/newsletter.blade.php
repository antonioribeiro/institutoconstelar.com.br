<div id="vue-newsletter" class="services-section-2 parallax" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row" v-if="! registered">
            <div class="col-md-12 text-center">
                <h5 class="color-green">Fique por dentro do que acontece no Núcleo Constelar</h5>
                <h1>Inscreva-se na nossa Newsletter</h1>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                        <div class="input-group">
                            <label class="sr-only" for="subscribe-email">Endereço e-mail</label>
                            <input v-model="email" type="email" class="form-control" id="subscribe-email" placeholder="Endereço e-mail">
                            <span class="input-group-btn">e
                                <button @click="__register" class="btn btn-theme-color btn-lg">Enviar</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--services section 1 end-->

