var modals = document.querySelectorAll("button[data-modal]");
  for(var i = 0; i < modals.length; i++){
    console.log(modals[i])
    modals[i].addEventListener('click', function(){
      window.location = "#"+this.dataset.modal;
    })
  }