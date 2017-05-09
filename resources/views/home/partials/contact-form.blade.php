<form @submit.prevent>
    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

    <div class="row">
        <div class="col-xs-12">
            <div v-for="error in errors" class="alert alert-danger" role="alert">@{{ error[0] }}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Nome<span>*</span></label>
                    <input v-model="form.name" type="text" class="form-control" placeholder="Nome" id="name">
                    <p class="help-block"></p>
                </div>
            </div>

        </div>

        <div class="col-md-5">
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Email<span>*</span></label>
                    <input v-model="form.email" type="email" class="form-control" placeholder="Endereço Email" id="email">
                    <p class="help-block"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Mensagem<span>*</span></label>
                    <textarea v-model="form.message" rows="5" class="form-control" placeholder="Mensagem" id="message"></textarea>
                    <p class="help-block"></p>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="row control-group">
                <div class="form-group col-xs-12 controls">
                    <label>Telefone</label>
                    <input v-model="form.phone" type="text" class="form-control" placeholder="Telefone">
                    <p class="help-block"></p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button @click="__submit" class="btn btn-theme-color btn-lg">Enviar Mensagem</button>
        </div>
    </div>
</form>
<!--contact form-->
