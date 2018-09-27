<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                        <h5>Listagem de dispositivos</h5>
                    </div>
                    <div class="col-4">
                        <a href="/devices/create">
                            <button class="btn btn-success btn-sm float-right">
                                Novo dispositivo
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>HostName</th>
                                <th>IP</th>
                                <th>Tipo</th>
                                <th>Fabricante</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($variables['devices'] as $device) { ?>
                                <tr>
                                    <td><?= $device->hostname ?></td>
                                    <td><?= $device->ip ?></td>
                                    <td><?= $device->tipo ?></td>
                                    <td><?= $device->fabricante ?></td>
                                    <td class="form-inline">
                                        <form action="/devices/edit?id=<?= $device->id ?>" method="POST">
                                            <button class="btn btn-success btn-sm">
                                                Editar
                                            </button>
                                        </form>&nbsp
                                        <form action="/devices/destroy?id=<?= $device->id ?>" method="POST">
                                            <button class="btn btn-danger btn-sm">
                                               Excluir
                                            </button>
                                        </form>
                                    </td>
                                </tr>    
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>