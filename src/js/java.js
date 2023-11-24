function MostrarPopUP() {
    
    const modal = document.createElement("div");
    modal.classList.add("modal", "fade", "in");
    modal.setAttribute("tabindex", "-1");
    modal.setAttribute("role", "dialog");
  
    
    const dialog = document.createElement("div");
    dialog.classList.add("modal-dialog");
  
   
    const content = document.createElement("div");
    content.classList.add("modal-content");
  
    
    const header = document.createElement("div");
    header.classList.add("modal-header");
  
   
    const title = document.createElement("h5");
    title.textContent = "Bem-vindo!";
  
    
    header.appendChild(title);
  
    
    const body = document.createElement("div");
    body.classList.add("modal-body");
  
    
    const text = document.createElement("p");
    text.textContent = "Bem Vindo á pagina de gerenciamento do Hospital Decós";
  
    
    body.appendChild(text);
  
   
    const action = document.createElement("button");
    action.classList.add("btn", "btn-primary");
    action.textContent = "Fechar";
  
    
    body.appendChild(action);
  
    
    content.appendChild(body);
  
    
    content.appendChild(action);
  
   
    dialog.appendChild(content);
  
    document.body.appendChild(modal);
  
  
    action.addEventListener("click", () => {
      
      modal.remove();
    });
  }
  