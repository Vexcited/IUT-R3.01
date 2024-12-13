<?php
require_once 'views/header.php';
?>

<main class="max-w-[600px] mx-auto py-6">
  <?php if (isset($_SESSION['user'])) { ?>
    <section class="flex items-center justify-between pb-6 px-4">
      <p class="text-[#4C4F69] dark:text-[#CAD3F5] text-2xl">De retour, <a href="/?c=user&a=profile&id=<?= $_SESSION['user']['id'] ?>" class="hover:underline text-[#8839EF] dark:text-[#C6A0F6]"><?= $_SESSION['user']['nom'] ?></a> !</p>
      <a href="/?c=user&a=logout" class="bg-[#7c7f93]/90 hover:bg-[#7c7f93] transition-colors text-[#EFF1F5] py-2 px-5 rounded-full">
        Se déconnnecter
      </a>
    </section>

    <section class="px-4">
      <form action="/?c=posts&a=create" method="POST"
        class="flex flex-col gap-2 max-w-[600px] py-4 px-6 mx-auto rounded-3xl border border-[#4C4F69]/20 dark:border-[#CAD3F5]/20">
        <input class="bg-transparent text-xl font-medium outline-none" type="text" placeholder="Un titre pour votre publication" name="title" required>
        <textarea class="bg-transparent outline-none" placeholder="Écrivez ce qu'il vous passe par la tête..." name="content" required></textarea>

        <button type="submit" class="hover:bg-[#8839EF] bg-[#8839EF]/90 text-[#EFF1F5] dark:hover:bg-[#c6a0f6] dark:bg-[#c6a0f6]/90 dark:text-[#24273a] py-2 px-5 w-fit ml-auto rounded-full">
          Poster
        </button>
      </form>
    </section>
  <?php } else { ?>
    <section class="px-4">
      <div
        class="flex flex-col gap-2 max-w-[600px] py-4 px-6 mx-auto rounded-3xl border border-[#4C4F69]/20 dark:border-[#CAD3F5]/20">
        <h2 class="text-2xl font-bold">
          Se connecter pour publier
        </h2>
        <p>
          Vous devez être connecté pour pouvoir publier un post.
          Si vous n'avez pas de compte, vous pouvez vous inscrire.
        </p>

        <div class="flex justify-end items-center gap-3">
          <a href="/?c=user&a=d-signup" class="hover:bg-[#e6e9ef] text-[#4c4f69] dark:hover:bg-[#1e2030] dark:text-[#b8c0e0] py-2 px-4 w-fit rounded-full transition-colors">
            S'inscrire
          </a>
          <a href="/?c=user&a=d-login" class="hover:bg-[#8839EF] bg-[#8839EF]/90 text-[#EFF1F5] dark:hover:bg-[#c6a0f6] dark:bg-[#c6a0f6]/90 dark:text-[#24273a] py-2 px-5 w-fit rounded-full transition-colors">
            Se connecter
          </a>
        </div>
        </form>
    </section>
  <?php } ?>

  <hr class="border-[#4C4F69]/20 dark:border-[#CAD3F5]/20 my-6">

  <section class="px-4">
    <div class="flex flex-col gap-4">
      <?php foreach ($posts as $post): ?>
        <div class="rounded-3xl rounded-3xl border border-[#4C4F69]/20 dark:border-[#CAD3F5]/20" data-post-id="<?= $post['id'] ?>" style="scroll-margin-top: 100px">
          <div class="py-4 px-6 flex items-center gap-2">
            <p class="text-sm">
              <span class="opacity-75">Publié par</span> <a href="/?c=user&a=profile&id=<?= $post['utilisateur_id'] ?>" class="hover:underline text-[#8839ef] dark:text-[#c6a0f6]"><?= $post['nom_utilisateur'] ?></a> <span class="opacity-75">le <?= Date::timestampToLocal($post['date_publication']) ?></span>
            </p>

            <?php if (isset($_SESSION['user']) && $_SESSION['user']['id'] === $post['utilisateur_id']) { ?>
              <div class="ml-auto flex items-center gap-2">
                <a
                  href="/?c=posts&a=remove&id=<?= $post['id'] ?>"
                  class="dark:hover:text-[#ed8796] hover:text-[#d20f39] transition-colors"
                  title="Supprimer le post">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 4H15.5L14.5 3H9.5L8.5 4H5V6H19M6 19C6 19.5304 6.21071 20.0391 6.58579 20.4142C6.96086 20.7893 7.46957 21 8 21H16C16.5304 21 17.0391 20.7893 17.4142 20.4142C17.7893 20.0391 18 19.5304 18 19V7H6V19Z" fill="currentColor" />
                  </svg>
                </a>
                <button
                  type="button"
                  onclick="handleModify(<?= $post['id'] ?>, this)"
                  data-state="non-active">
                  <svg class="post-modify-non-active-logo" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.71 7.04C21.1 6.65 21.1 6 20.71 5.63L18.37 3.29C18 2.9 17.35 2.9 16.96 3.29L15.12 5.12L18.87 8.87M3 17.25V21H6.75L17.81 9.93L14.06 6.18L3 17.25Z" fill="currentColor" />
                  </svg>

                  <svg class="post-modify-active-logo hidden" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 7.00003L9 19L3.5 13.5L4.91 12.09L9 16.17L19.59 5.59003L21 7.00003Z" fill="currentColor" />
                  </svg>
                </button>
              </div>
            <?php } ?>
          </div>

          <hr class="border-[#4C4F69]/20 dark:border-[#CAD3F5]/20">

          <div class="p-6 flex flex-col gap-2">
            <h2 class="text-2xl font-medium" id="<?= $post['id'] . '-title' ?>">
              <?= $post['titre'] ?>
            </h2>

            <p id="<?= $post['id'] . '-content' ?>">
              <?= $post['contenu'] ?>
            </p>
          </div>

          <?php if (isset($_SESSION['user'])) { ?>
            <hr class="border-[#4C4F69]/20 dark:border-[#CAD3F5]/20">

            <div class="mt-4 mb-6 flex items-center justify-center gap-4">
              <button title="J'aime" type="button" onclick="react(<?= $post['id'] ?>, 'like')" class="reaction-button transition-all text-lg hover:scale-110 rounded-full px-4 py-2 flex items-center gap-3">
                J'aime
                <span id="react-value-<?= $post['id'] ?>-like">
                  0
                </span>
              </button>
              <div class="relative">
                <button title="Pouce en l'air" type="button" onclick="react(<?= $post['id'] ?>, 'up')" class="reaction-button transition-all text-4xl hover:scale-110 rounded-full w-[60px] h-[60px]">
                  👍
                </button>
                <span class="absolute -bottom-1 -right-1 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-up">
                  0
                </span>
              </div>
              <div class="relative">
                <button title="Amusant" type="button" onclick="react(<?= $post['id'] ?>, 'lmfao')" class="reaction-button transition-all text-4xl hover:scale-110 rounded-full w-[60px] h-[60px]">
                  🤣
                </button>
                <span class="absolute -bottom-1 -right-1 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-lmfao">
                  0
                </span>
              </div>
              <div class="relative">
                <button title="Adore" type="button" onclick="react(<?= $post['id'] ?>, 'love')" class="reaction-button transition-all text-4xl hover:scale-110 rounded-full w-[60px] h-[60px]">
                  ❤️
                </button>
                <span class="absolute -bottom-1 -right-1 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-love">
                  0
                </span>
              </div>
              <div class="relative">
                <button title="Confus" type="button" onclick="react(<?= $post['id'] ?>, 'confused')" class="reaction-button transition-all text-4xl hover:scale-110 rounded-full w-[60px] h-[60px]">
                  😕
                </button>
                <span class="absolute -bottom-1 -right-1 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-confused">
                  0
                </span>
              </div>
              <div class="relative">
                <button title="Geek" type="button" onclick="react(<?= $post['id'] ?>, 'nerd')" class="reaction-button transition-all text-4xl hover:scale-110 rounded-full w-[60px] h-[60px]">
                  🤓
                </button>
                <span class="absolute -bottom-1 -right-1 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-nerd">
                  0
                </span>
              </div>
            </div>
          <?php } ?>

          <hr class="border-[#4C4F69]/20 dark:border-[#CAD3F5]/20">

          <div class="flex flex-col gap-4 py-4">
            <?php if (isset($_SESSION['user'])) { ?>
              <form class="comment-form flex items-center gap-6 p-4">
                <input type="hidden" name="postId" value="<?= $post['id'] ?>">
                <textarea class="w-full bg-transparent outline-none bg-[#e6e9ef] dark:bg-[#1e2030] p-4 rounded-xl" name="content" placeholder="Écrire un commentaire..." required></textarea>
                <button type="submit" class="p-4 rounded-full text-[#4C4F69] bg-[#E6E9EF] dark:bg-[#373A4D] dark:text-[#CAD3F5]">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 21L23 12L2 3V10L17 12L2 14V21Z" fill="currentColor" />
                  </svg>
                </button>
              </form>
            <?php } ?>

            <div class="flex flex-col gap-2" id="comments-container-<?= $post['id'] ?>"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
</main>

<script>
  const authenticated = <?= isset($_SESSION['user']) ? 'true' : 'false' ?>;
  const userID = <?= isset($_SESSION['user']) ? $_SESSION['user']['id'] : -1 ?>;

  async function handleModify(id, button) {
    const titleElement = document.getElementById(id + '-title');
    const contentElement = document.getElementById(id + '-content');

    const isNonActive = button.dataset.state === 'non-active';

    const nonActiveLogo = button.querySelector('.post-modify-non-active-logo');
    const activeLogo = button.querySelector('.post-modify-active-logo');

    if (isNonActive) {
      titleElement.setAttribute('contenteditable', true);
      contentElement.setAttribute('contenteditable', true);

      button.dataset.state = "active";
      nonActiveLogo.classList.add('hidden');
      activeLogo.classList.remove('hidden');
    } else {
      titleElement.setAttribute('contenteditable', false);
      contentElement.setAttribute('contenteditable', false);

      const form = new FormData();
      form.append('id', id);
      form.append('title', titleElement.innerText);
      form.append('content', contentElement.innerText);

      const response = await fetch('/?c=posts&a=modify', {
        method: 'POST',
        body: form
      });

      button.dataset.state = "non-active";
      nonActiveLogo.classList.remove('hidden');
      activeLogo.classList.add('hidden');
    }
  }

  document.querySelectorAll(".comment-form").forEach(form => {
    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      const formData = new FormData(form);
      const postId = formData.get('postId');

      await fetch('/?c=comments&a=create', {
        method: 'POST',
        body: formData
      });

      // On supprime le contenu de la <textarea> après avoir envoyé le commentaire.
      form.querySelector('textarea').value = '';

      // On met à jour les commentaires affichés.
      await fetchComments(postId);
    });
  });

  const renderComments = (comments, postId) => {
    const container = document.getElementById(`comments-container-${postId}`);

    // Aucun commentaire à afficher.
    if (comments.length === 0) {
      let html = `
        <div class="text-center pb-2">
          <p>Aucun commentaire pour le moment.</p>
      `;

      if (authenticated) {
        html += `
          <p class="opacity-70 font-medium text-[#8839ef] dark:text-[#c6a0f6]">Soyez le premier à commenter !</p>
        `;
      } else {
        html += `
          <a href="/?c=user&a=d-login" class="hover:underline text-[#8839ef] dark:text-[#c6a0f6]">Connectez-vous pour commenter.</a>
        `;
      }

      html += `</div>`;
      container.innerHTML = html;

      return;
    } else container.innerHTML = "";

    for (const comment of comments) {
      const div = document.createElement('div');
      div.classList.add('py-4', 'px-6', 'dark:bg-[#1e2030]/20', 'bg-[#e6e9ef]/50');
      div.dataset.commentId = comment.id;
      div.style.scrollMarginTop = "100px";

      div.innerHTML = `
        <p class="text-lg mb-1"><a class="hover:underline text-[#8839ef] dark:text-[#c6a0f6]" href="/?c=user&a=profile&id=${comment.utilisateur_id}">${comment.nom_utilisateur}</a> <span class="opacity-75">le ${new Date(`${comment.date_commentaire}Z`).toLocaleString("fr-FR")}</span></p>
        <p>${comment.contenu.trim() || '<i class="italic opacity-50">Le commentaire a été laissé vide.</i>'}</p>
      `;

      container.appendChild(div);
    }
  }

  const fetchComments = async (postId) => {
    const response = await fetch(`/?c=comments&a=read&postId=${postId}`);
    const data = await response.json();
    renderComments(data, postId)
  };

  const DEFAULT_REACTION_CLASSLIST = "bg-[#e6e9ef] dark:hover:bg-[#373A4D] dark:bg-[#373A4D]/50".split(" ");
  const SELECTED_REACTION_CLASSLIST = "bg-[#8839ef]/80 text-[#eff1f5] dark:bg-[#c6a0f6] dark:text-[#24273a]".split(" ");

  document.querySelectorAll(".reaction-button").forEach((element) => {
    element.classList.add(...DEFAULT_REACTION_CLASSLIST)
  })

  const getReactionParentButton = (element) => {
    let container = element.parentElement;
    if (container.tagName === 'BUTTON') return container;

    return container.querySelector("button");
  }

  const incrementReactionOnDOM = (postId, reactionWord) => {
    const element = document.getElementById(`react-value-${postId}-${reactionWord}`);
    element.innerText = parseInt(element.innerText) + 1;

    const container = getReactionParentButton(element);

    if (didUserReacted(postId, reactionWord)) {
      container.classList.remove(...DEFAULT_REACTION_CLASSLIST);
      container.classList.add(...SELECTED_REACTION_CLASSLIST);
    }
    else {
      container.classList.remove(...SELECTED_REACTION_CLASSLIST);
      container.classList.add(...DEFAULT_REACTION_CLASSLIST);
    }
  };

  const decrementReactionOnDOM = (postId, reactionWord) => {
    const element = document.getElementById(`react-value-${postId}-${reactionWord}`);
    element.innerText = parseInt(element.innerText) - 1;

    const container = getReactionParentButton(element);
    container.classList.remove(...SELECTED_REACTION_CLASSLIST);
    container.classList.add(...DEFAULT_REACTION_CLASSLIST);
  };

  const removeReactionFromCache = (postId, reactionWord) => {
    const index = whereIReacted[postId].indexOf(reactionWord);
    if (index !== -1) {
      whereIReacted[postId].splice(index, 1);
    }
  }

  const addReactionToCache = (postId, reactionWord) => {
    if (postId in whereIReacted) {
      whereIReacted[postId].push(reactionWord);
    }
    else {
      whereIReacted[postId] = [reactionWord];
    }
  }

  const didUserReacted = (postId, reactionWord) => {
    return postId in whereIReacted && whereIReacted[postId].includes(reactionWord)
  }

  const whereIReacted = {};
  const react = async (postId, reactionWord) => {
    if (didUserReacted(postId, reactionWord)) {
      await fetch(`/?c=reactions&a=delete&postId=${postId}&reaction=${reactionWord}`);
      removeReactionFromCache(postId, reactionWord);
      decrementReactionOnDOM(postId, reactionWord);
    }
    else {
      await fetch(`/?c=reactions&a=create&postId=${postId}&reaction=${reactionWord}`);
      addReactionToCache(postId, reactionWord);
      incrementReactionOnDOM(postId, reactionWord);
    }
  };

  const fetchReactions = async (postId) => {
    const response = await fetch(`/?c=reactions&a=read&postId=${postId}`);
    const data = await response.json();

    for (const reaction of data) {
      if (reaction.utilisateur_id === userID) {
        addReactionToCache(postId, reaction.contenu)
      }

      incrementReactionOnDOM(postId, reaction.contenu);
    }
  };

  const posts = document.querySelectorAll('[data-post-id]');
  for (const post of posts) {
    const postId = post.getAttribute('data-post-id');
    fetchComments(postId);
    fetchReactions(postId);
  }
</script>

<?php
require_once 'views/footer.php';
?>