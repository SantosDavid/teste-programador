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
            <form action="/encryption/decryption" method="POST">
                <div class="card-body">
                    <?php foreach($variables['encrypt'] as $alg => $encrypt) { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <label><?= $alg ?></label>
                                <input type="text" class="form-control" disabled value="<?= $encrypt ?>">
                                <input type="hidden" class="form-control" value="<?= $encrypt ?>" name="<?= $alg ?>">
                            </div>
                        </div>
                        <br>
                    <?php } ?>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-success float-right">
                                Descriptografar
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>