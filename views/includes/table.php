<body>
    <div class= "content">
        <table class="table">
            <thead>
                <tr class="blue text-white ">
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Celular para contato</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($resultData as $data): ?>
                    <tr>
                        <td><?=$data['name'] ?></td>
                        <td><?=$data['birth'] ?></td>
                        <td><?=$data['email'] ?></td>
                        <td><?=$data['celular'] ?></td>
                        <td>
                            <a href=""><img src="../../img/editar.png" alt=""></a>
                            <a href=""><img src="../../img/excluir.png" alt=""></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>