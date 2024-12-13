<?php
require_once 'views/header.php';
?>

<main class="container mx-auto">
  <form action="/?c=user&a=signup" method="POST"
    class="flex flex-col gap-6 px-4 py-6 mx-auto max-w-[600px]"
  >
    <div class="flex flex-col">
      <h1 class="text-xl font-bold">Inscrivez vous</h1>
      <p>
        Vous avez déjà un compte ? <a href="/?c=user&a=d-login" class="dark:text-[#c6a0f6] text-[#8839ef] hover:underline">Connectez vous !</a>
      </p>
    </div>

    <div class="flex flex-col gap-4">
      <input type="text" class="outline-none px-4 py-2 rounded-2xl bg-[#e6e9ef] dark:bg-[#1e2030] w-full focus:outline-2 focus:dark:outline-[#c6a0f6] focus:outline-[#8839ef]" placeholder="Nom" name="name" required>
      <input type="email" class="outline-none px-4 py-2 rounded-2xl bg-[#e6e9ef] dark:bg-[#1e2030] w-full focus:outline-2 focus:dark:outline-[#c6a0f6] focus:outline-[#8839ef]" placeholder="E-Mail" name="email" required>
      <input type="password" class="outline-none px-4 py-2 rounded-2xl bg-[#e6e9ef] dark:bg-[#1e2030] w-full focus:outline-2 focus:dark:outline-[#c6a0f6] focus:outline-[#8839ef]" placeholder="Mot de passe" name="password" required>
    </div>

    <button type="submit" class="px-4 py-2 rounded-2xl hover:bg-[#8839EF] bg-[#8839EF]/90 text-[#EFF1F5] dark:hover:bg-[#c6a0f6] dark:bg-[#c6a0f6]/90 dark:text-[#24273a]">
      S'inscrire
    </button>
  </form>
</main>

<?php
require_once 'views/footer.php';
?>