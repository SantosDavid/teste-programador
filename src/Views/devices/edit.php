<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Editar dispositivo</h5>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">
                <form action="/devices/update?id=<?= $variables['device']->id ?>" method="POST">
                    <div class="row">
                        <div class="col-4">
                        <label>Hostname</label>
                        <input type="text" class="form-control" name="hostname" required value="<?= $variables['device']->hostname ?>">
                        </div>
                        <div class="col-2">
                        <label>IP</label>
                        <input type="text" class="form-control" name="ip" required value="<?= $variables['device']->ip ?>">
                        </div>
                        <div class="col-2">
                        <label>Tipo</label>
                            <select name="tipo" class="form-control" required>
                                <option value="servidor" <?= $variables['device']->tipo === 'servidor' ? 'selected' : '' ?>>Servidor</option>
                                <option value="roteador"  <?= $variables['device']->tipo === 'roteador' ? 'selected' : '' ?>>Roteador</option>
                                <option value="switch"  <?= $variables['device']->tipo === 'switch' ? 'selected' : '' ?>>Switch</option>
                            </select>
                        </div>
                        <div class="col-2">
                        <label>Fabricante</label>
                        <input type="text" class="form-control" name="fabricante" required value="<?= $variables['device']->fabricante ?>">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success float-right">
                                Salvar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>