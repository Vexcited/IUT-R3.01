const params = new URLSearchParams(location.search);
const route = params.get("action") ?? "accueil";

/**
 * @param {string} isbn
 * @returns {boolean}
 */
const checkISBN = (isbn) => {
  return isbn.length === 13;
}

switch (route) {
  case "ajouter": {
    /** @type {HTMLInputElement} */
    const isbnInputText = document.getElementById("isbn");
    /** @type {HTMLFormElement | null} */
    const form = document.getElementById("book-form");

    form?.addEventListener("submit", (event) => {
      if (checkISBN(isbnInputText.value)) return;

      alert("ISBN invalide, vérifiez qu'il fait bien 13 caractères");
      event.preventDefault();
    });
  }

  case "index": {
    const deletionButton = document.querySelectorAll(".delete-button");

    deletionButton.forEach((button) => {
      /** @type {string} */
      const id = button.dataset.id;
      
      button.onclick = () => {
        const ok = window.confirm("Voulez-vous vraiment supprimer ce livre ?");
        if (!ok) return;

        window.location.assign(`/?action=supprimer&id=${id}`);
      }
    });
  }
}
