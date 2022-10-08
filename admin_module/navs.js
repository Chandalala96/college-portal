function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    let closeBtn = document.querySelector(".closebtn");
    let openBtn = document.querySelector(".openBtn");
    closeBtn.classList.toggle("unactive");
    openBtn.classList.toggle("active");
    document.getElementById("main").style.marginLeft = "300px";
    closeBtn.style.display= "block";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "44px";
    let closeBtn = document.querySelector(".closebtn");
    let openBtn = document.querySelector(".openBtn");
  
    closeBtn.classList.toggle("unactive");
    openBtn.classList.toggle("active");
    document.getElementById("main").style.marginLeft= "60px";
    closeBtn.style.display= "none";
  }
  
  
  const navToggler = document.querySelector(".nav-toggler");
   navToggler.addEventListener("click", navToggle);
  
   function navToggle() {
      navToggler.classList.toggle("active");
      const nav = document.querySelector(".nav");
      nav.classList.toggle("open");
      if(nav.classList.contains("open")){
          nav.style.maxHeight = nav.scrollHeight + "px";
      }
      else{
          nav.removeAttribute("style");
      }
   } 
  
  
  