<?php
require_once 'views/header.php';
?>

<main class="container mx-auto space-y-8 py-6">
  <?php if (isset($_SESSION['user'])) { ?>
    <section>
      <form action="/?c=posts&a=create" method="POST"
        class="flex flex-col gap-2 max-w-[600px] bg-gray-200 p-4 mx-auto"
      >
        <input type="text" placeholder="Titre" name="title" required>
        <textarea placeholder="Contenu" name="content" required></textarea>
    
        <button type="submit">
          Créer
        </button>
      </form>
    </section>
  <?php } ?>
  
  <section>
    <div class="flex flex-col gap-4 max-w-[600px] mx-auto">
      <?php foreach ($posts as $post): ?>
        <div class="rounded-lg bg-gray-100 p-4" data-post-id="<?= $post['id'] ?>">
          <p class="text-sm mb-2"><?= $post['nom_utilisateur'] ?> - Publié le <?= $post['date_publication'] ?> (UTC+0)</p>
          <h2 class="text-lg font-medium" id="<?= $post['id'] . '-title' ?>">
            <?= $post['titre'] ?>
          </h2>
          <p id="<?= $post['id'] . '-content' ?>">
            <?= $post['contenu'] ?>
          </p>

          <?php if (isset($_SESSION['user']) && $_SESSION['user']['id'] === $post['utilisateur_id']) { ?>
            <div class="mt-3 flex items-center gap-2">
              <a href="/?c=posts&a=remove&id=<?= $post['id'] ?>" class="text-red-500 hover:underline">
                Supprimer
              </a>
              <button type="button" onclick="handleModify(<?= $post['id'] ?>, this)" class="hover:underline">
                Modifier
              </a>
            </div>
          <?php } ?>

          <?php if (isset($_SESSION['user'])) { ?>
            <div class="mt-4 flex items-center gap-4">
              <div class="relative">
                <button type="button" onclick="react(<?= $post['id'] ?>, 'up')" class="text-4xl hover:scale-110 bg-white rounded-full pb-2">
                  👍
                </button>
                <span class="absolute -bottom-3 -right-2 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-up">
                  0
                </span>
              </div>
              <div class="relative">
                <button type="button" onclick="react(<?= $post['id'] ?>, 'lmfao')" class="text-4xl hover:scale-110 bg-white rounded-full pb-2">
                  🤣
                </button>
                <span class="absolute -bottom-3 -right-2 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-lmfao">
                  0
                </span>
              </div>
              <div class="relative">
                <button type="button" onclick="react(<?= $post['id'] ?>, 'love')" class="text-4xl hover:scale-110 bg-white rounded-full pb-2">
                  ❤️
                </button>
                <span class="absolute -bottom-3 -right-2 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-love">
                  0
                </span>
              </div>
              <div class="relative">
                <button type="button" onclick="react(<?= $post['id'] ?>, 'confused')" class="text-4xl hover:scale-110 bg-white rounded-full pb-2">
                  😕
                </button>
                <span class="absolute -bottom-3 -right-2 text-sm bg-black text-white rounded-full px-2" id="react-value-<?= $post['id'] ?>-confused">
                  0
                </span>
              </div>
            </div>
          <?php } ?>

          <hr class="border-black/10 my-4">

          <div class="flex flex-col gap-4">
            <?php if (isset($_SESSION['user'])) { ?>
              <form class="comment-form flex items-center gap-2">
                <input type="hidden" name="postId" value="<?= $post['id'] ?>">
                <textarea class="w-full" name="content" placeholder="Commentaire" required></textarea>
                <button type="submit" class="bg-blue-500 text-white hover:underline p-2">
                  Envoyer
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
  async function handleModify (id, button) {
    const titleElement = document.getElementById(id + '-title');
    const contentElement = document.getElementById(id + '-content');

    const isNonActive = button.innerText === "Modifier";

    if (isNonActive) {
      titleElement.contentEditable = "true";
      contentElement.contentEditable = "true";
      button.innerText = "Valider";
    }
    else {
      titleElement.contentEditable = "false";
      contentElement.contentEditable = "false";
      button.innerText = "Modifier";
      const response = await fetch('/?c=posts&a=modify', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          id,
          title: titleElement.innerText,
          content: contentElement.innerText
        })
      });
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

      // on met à jour les commentaires.
      await fetchComments(postId);
    });
  });

  const renderComments = (comments, postId) => {
    const container = document.getElementById(`comments-container-${postId}`);
    container.innerHTML = '';

    for (const comment of comments) {
      const div = document.createElement('div');
      div.classList.add('bg-white', 'p-4', 'rounded-md');
      div.dataset.commentId = comment.id;

      div.innerHTML = `
        <p>${comment.nom_utilisateur} le ${new Date(comment.date_commentaire).toLocaleString()} à dit :</p>
        <p>${comment.contenu}</p>
      `;

      container.appendChild(div);
    }
  }

  const fetchComments = async (postId) => {
    const response = await fetch(`/?c=comments&a=read&postId=${postId}`);
    const data = await response.json();
    renderComments(data, postId)
  };

  const incrementReaction = (postId, reactionWord) => {
    const element = document.getElementById(`react-value-${postId}-${reactionWord}`);
    element.innerText = parseInt(element.innerText) + 1;
  };

  const whereIReacted = {};
  const react = async (postId, reactionWord) => {
    if (postId in whereIReacted && whereIReacted[postId].includes(reactionWord)) {
      alert("Vous avez déjà réagi avec cette émotion.");
      return;
    }

    await fetch(`/?c=reactions&a=create&postId=${postId}&reaction=${reactionWord}`);

    if (postId in whereIReacted) {
      whereIReacted[postId].push(reactionWord);
    }
    else {
      whereIReacted[postId] = [reactionWord];
    }
    
    incrementReaction(postId, reactionWord);
  };

  const fetchReactions = async (postId) => {
    const response = await fetch(`/?c=reactions&a=read&postId=${postId}`);
    const data = await response.json();

    for (const reaction of data) {
      if (reaction.utilisateur_id === <?= $_SESSION['user']['id'] ?>) {
        if (postId in whereIReacted) {
          whereIReacted[postId].push(reaction.contenu);
        }
        else {
          whereIReacted[postId] = [reaction.contenu];
        }
      }

      incrementReaction(postId, reaction.contenu);
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
