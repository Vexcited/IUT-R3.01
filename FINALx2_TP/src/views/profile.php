<?php
require_once 'views/header.php';
?>

<main class="max-w-[600px] w-full mx-auto p-6">
  <h1 id="user-name" class="text-xl font-bold mb-4 dark:text-[#c6a0f6] text-[#8839ef] w-fit outline-none"><?= $user['nom'] ?></h1>
  <p>Inscrit depuis le <?= Date::timestampToLocal($user['date_inscription']) ?></p>

  <?php if ($user['id'] === $_SESSION['user']['id']) { ?>
    <p>Votre e-mail : <span id="user-mail" class="dark:text-[#c6a0f6] text-[#8839ef] outline-none"><?= $user['email'] ?></span> (seulement visible par vous)</p>
    
    <div class="mt-8 flex items-center gap-4">
      <a href="/?c=user&a=logout" class="bg-[#7c7f93]/90 hover:bg-[#7c7f93] transition-colors text-[#EFF1F5] py-2 px-5 rounded-full">
        Se déconnecter
      </a>
  
      <button type="button" onclick="handleModifyUser(this)">
        Modifier mes informations
      </button>
    </div>
  <?php } ?>
</main>

<script>
  const usernameElement = document.getElementById('user-name');
  const emailElement = document.getElementById('user-mail');
  let isCurrentlyModifying = false;
  const userInputClasses = 'border rounded-xl px-2 py-1 border-[#4C4F69]/20 dark:border-[#CAD3F5]/20'.split(' ');

  const makeUserInputEditable = (element) => {
    element.setAttribute('contenteditable', true);
    element.classList.add(...userInputClasses);
  };

  const makeUserInputNotEditable = (element) => {
    element.setAttribute('contenteditable', false);
    element.classList.remove(...userInputClasses);
  };

  const handleModifyUser = async (button) => {
    if (isCurrentlyModifying) {
      const username = usernameElement.textContent.trim();
      const email = emailElement.textContent.trim();

      if (username && email) {
        const form = new FormData();
        form.append('name', username);
        form.append('email', email);

        const response = await fetch('/?c=user&a=modify', {
          method: 'POST',
          body: form
        });

        try {
          const json = await response.json();

          if (json.status === 'ok') {
            makeUserInputNotEditable(usernameElement);
            makeUserInputNotEditable(emailElement);
            button.textContent = 'Modifier mes informations';
            isCurrentlyModifying = false;
          }
        }
        catch {
          alert('Une erreur est survenue lors de la modification de vos informations, vérifiez les valeurs entrées.');
        }
      }
      else {
        alert('Veuillez remplir tous les champs.');
      }
    }
    else {
      makeUserInputEditable(usernameElement);
      makeUserInputEditable(emailElement);
      button.textContent = 'Valider les modifications';
      isCurrentlyModifying = true;
    }
  }
</script>

<?php
require_once 'views/footer.php';
?>
