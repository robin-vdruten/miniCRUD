const container = document.querySelector(".container");

fetch("https://pokeapi.co/api/v2/pokemon/ditto")
  .then((response) => response.json())
  .then((data) => {
    console.log(data);
    container.innerHTML = "<img src=" + data.sprites.front_default + ">";
  })
  .catch((e) => console.log(e));
