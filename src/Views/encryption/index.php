<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Criptografia</h5>
                    </div>
                </div>
            </div>
            <form action="/encryption/encrypt" method="POST">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <label>Texto</label>
                            <input type="text" name="string" class="form-control" required value="<?= isset($_POST['string']) ? $_POST['string'] : ''  ?>">
                        </div>
                        <div class="col-md-4">
                            <label>Key</label>
                            <input type="text" name="key" class="form-control" required minlength="32" maxlength="32" value="<?=  isset($_POST['key']) ? $_POST['key'] : '' ?>">
                        </div>
                    </div>
                    <?php if (array_key_exists('data', $variables)) { ?>
                        <br>
                        <?php foreach ($variables['data'] as $algorithm => $value) { ?>
                            <label><?= $algorithm ?></label>
                            <input type="text" disabled class="form-control" value="<?= $value ?>">
                            <br>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-10">
                            <button class="btn btn-success float-right" value="encrypt" name="action">
                                Criptografar
                            </button>
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success float-right" value="decrypt" name="action">
                                Descriptografar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>