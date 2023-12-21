"use strict";
function openModal(itemId) {
  var modal = document.getElementById("myModal");
  var deleteItemIdInput = document.getElementById("dlt");

  deleteItemIdInput.value = itemId;

  modal.style.display = "block";
}

function closeModal() {
  var modal = document.getElementById("myModal");
  modal.style.display = "none";
}

function openModalUpdate(id, name, birth, email, celular, sms, whatsapp, profession, phone, msgEmail) {
  var modal = document.getElementById("modalUpdate");
  var updateItem = document.getElementById("update");

  updateItem.value = id;

  document.getElementById('update_name').value = name
  document.getElementById('update_birth').value = birth
  document.getElementById('update_email').value = email
  document.getElementById('update_celular').value = celular
  document.getElementById('update_phone').value = phone
  document.getElementById('update_profession').value = profession

  if(sms == 1){
    document.getElementById('update_sms').checked = true
  }else{
    document.getElementById('update_sms').checked = false

  }

  if(whatsapp == 1){
    document.getElementById('update_whatsapp').checked = true
  }else{
    document.getElementById('update_whatsapp').checked = false
  }

  if(msgEmail == 1){
    document.getElementById('update_msgEmail').checked = true
  }else{
    document.getElementById('update_msgEmail').checked = false
  }
  modal.classList.add("show");
  modal.style.display = "block";


  event.preventDefault();

}

function closeModalUpdate() {
  console.log("close");
  var modal = document.getElementById("modalUpdate");
  modal.style.display = "none";
}

//Validações
function validateForm() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var birth = document.getElementById('birth').value;
    var phone = document.getElementById('phone').value;

    // Verificar formato de email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Por favor, insira um email válido.');
        return false;
    }

        var dateRegex = /^\d{2}\/\d{2}\/\d{4}$/;
        if (!dateRegex.test(birth)) {
        alert('Por favor, insira uma data de nascimento válida.');
            return false;
        }
    
        var parts = date.split('/');
        var day = parseInt(parts[0], 10);
        var month = parseInt(parts[1], 10);
        var year = parseInt(parts[2], 10);
    
        var inputDate = new Date(year, month - 1, day);
        var today = new Date();
    
        if (isNaN(inputDate) || inputDate > today) {
            return false;
        }
    
        var phoneRegex = /^\d{2} \d{4,5}-\d{4}$/;
        if(!phoneRegex.test(phone)){
        alert('Por favor, insira um telefone válido.');
            return false;
        }
    
        return true;        
}
//Validação Modal Update
function validateFormUpdate() {
  var name = document.getElementById('update_name').value;
  var email = document.getElementById('update_email').value;
  var birth = document.getElementById('update_birth').value;
  var phone = document.getElementById('update_phone').value;

  // Verificar formato de email
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
      alert('Por favor, insira um email válido.');
      return false;
  }

      var dateRegex = /^\d{2}\/\d{2}\/\d{4}$/;
      if (!dateRegex.test(birth)) {
      alert('Por favor, insira uma data de nascimento válida.');
          return false;
      }
  
      var parts = date.split('/');
      var day = parseInt(parts[0], 10);
      var month = parseInt(parts[1], 10);
      var year = parseInt(parts[2], 10);
  
      var inputDate = new Date(year, month - 1, day);
      var today = new Date();
  
      if (isNaN(inputDate) || inputDate > today) {
          return false;
      }
  
      var phoneRegex = /^\d{2} \d{4,5}-\d{4}$/;
      if(!phoneRegex.test(phone)){
      alert('Por favor, insira um telefone válido.');
          return false;
      }
  
      return true;        
}

//Regex Data de Nascimento
function formatDOB(input) {
    input.value = input.value.replace(/\D/g, '').replace(/^(\d{2})(\d)/, '$1/$2').replace(/(\d{2})(\d)/, '$1/$2').replace(/(\d{4})\d+?$/, '$1');
}

//Regex Telefone
function formatPhone(input) {
    input.value = input.value.replace(/\D/g, '').replace(/^(\d{2})(\d)/g, '($1) $2').replace(/(\d)(\d{4})$/, '$1-$2');
}

