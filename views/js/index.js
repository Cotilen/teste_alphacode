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
