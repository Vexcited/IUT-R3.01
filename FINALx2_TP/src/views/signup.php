<?php
require_once 'views/header.php';
?>

<main class="container mx-auto">
  <form action="/?c=user&a=signup" method="POST"
    class="flex flex-col gap-2 max-w-[300px] bg-gray-200 p-4 mx-auto"
  >
    <input type="text" placeholder="Nom" name="name" required>
    <input type="email" placeholder="E-Mail" name="email" required>
    <input type="password" placeholder="Mot de passe" name="password" required>

    <button type="submit">
      S'inscrire
    </button>
  </form>
</main>

<?php
require_once 'views/footer.php';
?>