<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Novo dispositivo</h5>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">
                <form action="/devices/store" method="POST">
                    <div class="row">
                        <div class="col-4">
                        <label>Hostname</label>
                        <input type="text" class="form-control" name="hostname" required>
                        </div>
                        <div class="col-2">
                        <label>IP</label>
                        <input type="text" class="form-control" name="ip" required>
                        </div>
                        <div class="col-2">
                        <label>Tipo</label>
                            <select name="tipo" class="form-control" required>
                                <option value="servidor">Servidor</option>
                                <option value="roteador">Roteador</option>
                                <option value="switch">Switch</option>
                            </select>
                        </div>
                        <div class="col-2">
                        <label>Fabricante</label>
                        <input type="text" class="form-control" name="fabricante" required>
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