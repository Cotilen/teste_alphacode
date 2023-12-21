<body>
    <div class="content padding">
        <table class="table table_scroll">
            <thead>
                <tr class="blue text-white">
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Email</th>
                    <th>Celular para contato</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody >
                <?php foreach ($resultData as $data) :
                    $array = $data
                ?>
                    <tr id="<?= $data['id'] ?>">
                        <td><?= substr($data['name'], 0, 25) ?></td>
                        <td><?= $data['birth'] ?></td>
                        <td><?= substr($data['email'], 0,35) ?></td>
                        <td><?= $data['celular'] ?></td>
                        <td class="row action ">
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <button id="button" type="submit" onclick="openModalUpdate(
                                '<?= $data['id'] ?>',
                                '<?= $data['name'] ?>',
                                '<?= $data['birth'] ?>',
                                '<?= $data['email'] ?>',
                                '<?= $data['celular'] ?>',
                                '<?= $data['sms'] ?>',
                                '<?= $data['whatsapp'] ?>',
                                '<?= $data['profession'] ?>',
                                '<?= $data['phone'] ?>',
                                '<?= $data['msgEmail'] ?>',
                                )">
                                <a href=""><img src="../../img/editar.png" alt=""></a>
                            </button>
                            <input type="hidden" name="id" value="<?= $data['id'] ?>">
                            <button id="button" onclick="openModal(<?= $data['id'] ?>)">
                                <img src="../../img/excluir.png" alt="">
                            </button>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>