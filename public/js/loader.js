function loader() {
    document.querySelector(".loader").classList.add("fade-out");
  }
  
  function fadeOut() {
    setInterval(loader, 2000);
  }
  
  window.onload = fadeOut();