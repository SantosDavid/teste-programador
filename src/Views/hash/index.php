<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Hash</h5>
                    </div>
                </div>
            </div>
            <form action="/hash/hash" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Texto</label>
                            <input type="text" name="text" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label>Texto2</label>
                            <input type="text" name="text2" class="form-control">
                        </div>
                    </div>
                    <?php if(isset($variables['hashes'])) { ?>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Hash gerado</th>
                                                <th>Hash do usuário</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($variables['hashes'] as $hash => $value) { ?>
                                                <tr>            
                                                    <td><?= $value ?></td>
                                                    <td>
                                                        <?php if (array_key_exists($hash, $variables['hashes2'])) { ?>
                                                            <?= $variables['hashes2'][$hash] ?>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success float-right">
                                Criptografar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>