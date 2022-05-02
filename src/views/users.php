<main class="content">
    <?php
        renderTitle(
            'Cadastro De Usuarios',
            'Mantenha sempre os dados atualizados',
            'icofont-users'
        );
        include(TEMPLATE_PATH."/messages.php");
    ?>

    <a href="save_user.php" class="btn btn-lg btn-primary mb-3">Novo usuario</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Data de Admissao</th>
            <th>Data de Desligamento</th>
            <th>Acoes</th>
        </thead>
        <tbody>
            <?php foreach($users as $user):?>
                <tr>
                    <td><?=$user->name?></td>
                    <td><?=$user->email?></td>
                    <td><?=$user->start_date?></td>
                    <td><?=$user->end_date?></td>
                    <td>

                    </td>
                </tr>
            <?endforeach?>
        </tbody>
    </table>
</main>