var novoItem = document.querySelector(".novo-item");
var btnLimpar = document.querySelector("#btn-limpar");

var listaVirtual = JSON.parse(localStorage.getItem("todo")) || [];

novoItem.textContent = "Novo item da lista";

novoItem.classList.add("novo-item");

for(item of listaVirtual) {
    let li = document.createElement("li");
    li.classList.add("item");
    li.textContent = item;
    novoItem.after(li);
}

novoItem.addEventListener('click', () => {
    if(novoItem.classList.contains("novo-item"))
        novoItem.textContent = null;
});

novoItem.addEventListener('blur', () => {
    if(!novoItem.textContent) {
        novoItem.textContent = "Novo item da lista";
        novoItem.classList.add("novo-item");
    } else {
        
        listaVirtual.push(novoItem.textContent);
        localStorage.setItem("todo", JSON.stringify(listaVirtual));
        
        let li = document.createElement("li");
        li.classList.add("item");
        li.textContent = novoItem.textContent;
        novoItem.textContent = "Novo item da lista";
        novoItem.after(li);
    }
});

btnLimpar.addEventListener("click", () => {
    localStorage.clear();
    listaVirtual = [];
});