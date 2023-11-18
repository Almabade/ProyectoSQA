let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();
});
  

function menuBtnChange(){
    if(sidebar.classList.contains("open")){
    document.getElementById('hogar').style.display='block';
    document.getElementById('hogar2').style.display='block';
    document.getElementById('nav-list').classList.remove('d-none');
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");

    }else {
      closeBtn.classList.replace("bx-menu-alt-right","bx-menu");
      document.getElementById('hogar').style.display='none';
      document.getElementById('hogar2').style.display='none';
      document.getElementById('nav-list').classList.add('d-none');
    }
}
     