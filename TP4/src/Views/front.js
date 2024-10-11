document.addEventListener("DOMContentLoaded", () => {
  let recipes = document.querySelectorAll(".recipe");
  recipes.forEach((recipe) => {
    recipe.addEventListener("mouseover", () => {
      recipe.computedStyleMap.backgroundColor = "lightgray";
    });

    recipe.addEventListener("mouseout", () => {
      recipe.computedStyleMap.backgroundColor = "";
    });

    recipe.addEventListener("click", (event) => {
      event.preventDefault();
      let recipeId = recipe.dataset.id;
      window.open(`/?c=detail&id=${recipeId}`, "_self");
    })
  })
})
