<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PupilleNetwork</title>
</head>
<body>
  
<header class="flex items-center gap-6 justify-between px-8 py-6 border-b">
  <a class="shrink-0" href="/" class="font-bold">PupilleNetwork</a>

  <div class="relative w-full">
    <input onclick="openLiveSearch()" onblur="closeLiveSearch()" class="w-full bg-gray-100 rounded-full py-1 px-4" type="text" oninput="handleSearch(this.value)">
    <div id="live-search-container" class="absolute top-[36px] inset-x-0 border z-10 bg-gray-50 rounded-lg p-2 hidden">
    </div>
  </div>

  <nav class="flex items-center gap-4 shrink-0">
    <?php if (isset($_SESSION['user'])) { ?>
      <p>Bonjour, <?= $_SESSION['user']['nom'] ?></p>
      <a href="/?c=user&a=logout">Déconnexion</a>
    <?php } else { ?>
      <a href="/?c=user&a=d-signup">Inscription</a>
      <a href="/?c=user&a=d-login">Connexion</a>
    <?php } ?>
  </nav>
</header>

<script>
  const liveSearchContainer = document.getElementById('live-search-container');
  const handleSearch = async (value) => {
    if (value.trim() === "") {
      closeLiveSearch();
      return;
    }

    openLiveSearch();
    const results = await findResults(value);
    renderResults(results);
  }

  const openLiveSearch = () => {
    liveSearchContainer.classList.remove('hidden');
  }

  const closeLiveSearch = () => {
    setTimeout(() => {
      liveSearchContainer.classList.add('hidden');
    }, 100)
  }

  const findResults = async (query) => {
    const response = await fetch(`/?c=search&a=search&query=${query}`);
    return response.json();
  }

  const renderResults = (results) => {
    liveSearchContainer.innerHTML = "";
    const container = document.createElement('div');
    container.classList.add('flex', 'flex-col', 'gap-4');

    for (const user of results.users) {
      container.innerHTML += createUserTemplate(user);
    }
    for (const post of results.posts) {
      container.innerHTML += createPostTemplate(post);
    }
    for (const comment of results.comments) {
      container.innerHTML += createCommentTemplate(comment);
    }

    liveSearchContainer.appendChild(container);
  }

  const createPostTemplate = (post) => {
    return `
      <div onclick="scrollToPost(${post.id})" class="flex flex-col cursor-pointer hover:bg-gray-100 rounded-lg px-4 py-2">
        <h3><b class="font-bold">POST:</b> ${post.titre}</h3>
        <p>${post.contenu}</p>
        <p class="text-sm opacity-50">Posté par ${post.nom_utilisateur} le ${post.date_publication} (UTC+0)</p>
      </div>
    `;
  };

  const createUserTemplate = (user) => {
    return `
      <div class="flex flex-col px-4 py-2">
        <h3><b class="font-bold">UTILISATEUR:</b> ${user.nom}</h3>
        <p class="text-sm opacity-50">Inscrit depuis le ${user.date_inscription} (UTC+0)</p>
      </div>
    `;
  };

  const createCommentTemplate = (comment) => {
    return `
      <div onclick="scrollToComment(${comment.id})" class="flex flex-col cursor-pointer hover:bg-gray-100 rounded-lg px-4 py-2">
        <p><b class="font-bold">COMMENTAIRE:</b> ${comment.contenu}</p>
        <p class="text-sm opacity-50">Commenté le ${comment.date_commentaire} (UTC+0) par ${comment.nom_utilisateur}</p>
      </div>
    `;
  };

  const scrollToPost = (id) => {
    const element = document.querySelector(`[data-post-id="${id}"]`);
    element.scrollIntoView({ behavior: 'smooth' });
    closeLiveSearch();
  }

  const scrollToComment = (id) => {
    const element = document.querySelector(`[data-comment-id="${id}"]`);
    element.scrollIntoView({ behavior: 'smooth' });
    closeLiveSearch();
  }
</script>
