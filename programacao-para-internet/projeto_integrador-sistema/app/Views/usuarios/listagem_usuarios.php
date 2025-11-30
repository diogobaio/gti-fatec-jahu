    <div class="content" style="margin-top: 70px; margin-bottom: 70px;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Listagem de Usuários</h2>
                <a href="cadastro_usuarios.html" class="btn btn-success">Adicionar</a>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($usuarios as $u): ?>
                        <tr>
                            <td><?= $u['nome'] ?></td>
                            <td><?= $u['email']?></td>
                            <td><?= $u['cpf']  ?></td>
                            <td><?= $u['tipo'] ?></td>
                            <td>
                                <a href="cadastro_usuarios.html" class="btn btn-warning btn-sm">Editar</a>
                                <button class="btn btn-danger btn-sm">Excluir</button>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>