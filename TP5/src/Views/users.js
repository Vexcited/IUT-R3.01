const span_id = document.getElementById("profil-id");
const span_mail = document.getElementById("profil-mail");
const modifier_profil = document.getElementById("bouton_modifier_profil");

span_id.oninput = () => {
  modifier_profil.classList.remove("d-none")
};

span_mail.oninput = () => {
  modifier_profil.classList.remove("d-none")
};
