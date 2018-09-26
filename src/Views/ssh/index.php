<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Integração SSH</h5>
                    </div>
                </div>
            </div>
            <form action="/ssh/connect" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Dispositivos</label>
                            <select name="device_id" class="form-control" required>
                                <?php foreach ($variables['devices'] as $device) { ?>
                                    <option value="<?= $device->id ?>">
                                        HOSTNAME: <?= $device->hostname ?> | IP: <?= $device->ip ?> | TIPO: <?= $device->tipo ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Usuário</label>
                            <input type="text" name="user" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Senha</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success float-right">
                                Conectar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>