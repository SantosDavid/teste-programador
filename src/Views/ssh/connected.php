<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Integração SSH | <small>conectado</small></h5>
                    </div>
                </div>
            </div>
            <form action="/ssh/command" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Comando</label>
                            <input type="text" class="form-control" name="command" required>
                        </div>
                    </div>
                    <br>
                    <?php if (isset($variables['result'])) { ?>
                        <div class="row" style="background-color: black; color: white">
                            <div class="col-md-12">
                                <?= str_replace(PHP_EOL, '<br>', $variables['result']) ?>
                            </div>
                        </div>
                    <?php }  ?>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success float-right">
                                Enviar comando
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>