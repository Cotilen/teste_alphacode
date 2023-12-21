<!-- Modal Delete -->
<div id="myModal" class="modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Excluir</h5>
        <button type="button" class="btn-close" onclick="closeModal()" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Deseja realmente excluir este item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModal()" data-bs-dismiss="modal">Close</button>
        <form id="deleteForm" method="POST" action="index.php?action=delete&id=<?= $data['id'] ?>">
          <input type="hidden" name="id" id="dlt">
          <button type="submit" class="btn btn-primary">Confirmar Exclusão</button>
        </form>
      </div>
    </div>--
  </div>
</div>

<!-- Modal Update -->
<div id="modalUpdate" class="modal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar</h5>
        <button type="button" class="btn-close" onclick="closeModalUpdate()" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="index.php?action=update&id=<?= $data['id'] ?>" method="post">
      <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Nome completo</label>
                <input id="update_name" type="text" placeholder="Ex.: Cleiton dos Santos Cruz" class="form-control color__border" name="name">
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input id="update_email" type="text" placeholder="Ex.: cleitonncruz105@gmail.com" class="form-control" name="email">
              </div>
              <div class="form-group">
                <label>Telefone para contato</label>
                <input id="update_phone" type="text" placeholder="Ex.: (11)5787-1602" class="form-control" name="phone">
              </div>
              <div class="form-check d-flex ">
                <input class="form-check-input" type="checkbox" id="update_whatsapp" name="whatsapp" value="1" >
                <label class="form-check-label">Número de celular possui Whatsapp</label>
              </div>
              <div class="form-check d-flex ">
                <input class="form-check-input" type="checkbox" id="update_sms" name="sms" value="1" >
                <label class="form-check-label">Enviar notificações por SMS</label>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Data de nascimento</label>
                <input id="update_birth" type="text" placeholder="Ex.: 20/01/2001" class="form-control" name="birth">
              </div>
              <div class="form-group">
                <label>Profissão</label>
                <input id="update_profession" type="text" placeholder="Ex.: Desenvolvedor" class="form-control" name="profession">
              </div>
              <div class="form-group">
                <label>Celular para contato</label>
                <input id="update_celular" type="text" placeholder="Ex.: (11)95161-2029" class="form-control" name="celular">
              </div>
              <div class="form-check">
                <input id="update_msgEmail" class="form-check-input" type="checkbox" name="msgEmail" value="1" >
                <label class="form-check-label">Enviar notificações por E-mail</label>
              </div>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="closeModalUpdate()" data-bs-dismiss="modal">Close</button>
        <input type="hidden" name="id" id="update">
        <button type="submit" class="btn btn-primary">Editar Contato</button>
      </div>
      </form>

    </div>
  </div>
</div>