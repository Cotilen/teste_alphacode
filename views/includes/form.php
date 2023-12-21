<form action="index.php?action=create" method="post" onsubmit="return validateForm()">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>Nome completo</label>
                <input type="text" id="name" placeholder="Ex.: Cleiton dos Santos Cruz" class="form-control color__border" name="name" required>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" id="email" placeholder="Ex.: cleitonncruz105@gmail.com" class="form-control" name="email" maxlength="250" required>
            </div>
            <div class="form-group">
                <label>Telefone para contato</label>
                <input id="phone" type="text" placeholder="Ex.: (11)5787-1602" class="form-control" onkeyup="formatPhone(this)" name="phone" maxlength="14" required>
            </div>
            <div class="form-check d-flex ">
                <input class="form-check-input" type="checkbox" id="check1" name="whatsapp" value="1" checked>
                <label class="form-check-label">Número de celular possui Whatsapp</label>
            </div>
            <div class="form-check d-flex ">
                <input class="form-check-input" type="checkbox" id="check1" name="sms" value="1" checked>
                <label class="form-check-label">Enviar notificações por SMS</label>
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>Data de nascimento</label>
                <input id="birth" type="text" placeholder="Ex.: 20/01/2001" class="form-control" onkeyup="formatDOB(this)" name="birth" maxlength="10" required>
            </div>
            <div class="form-group">
                <label>Profissão</label>
                <input id="profession" type="text" placeholder="Ex.: Desenvolvedor" class="form-control" name="profession" required>
            </div>
            <div class="form-group">
                <label>Celular para contato</label>
                <input id="celular" type="text" placeholder="Ex.: (11)95161-2029" class="form-control" onkeyup="formatPhone(this)" name="celular" maxlength="15" required>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="check1" name="msgEmail" value="1" checked>
                <label class="form-check-label">Enviar notificações por E-mail</label>
            </div>
        </div>
    </div>
    <div class="form-group d-flex flex-row-reverse">
        <button type="submit" class="btn btn-primary btn-lg">Cadastrar contato</button>
    </div>
</form>