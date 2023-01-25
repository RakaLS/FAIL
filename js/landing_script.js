
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Baca lainnya"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Baca lebih sedikit"; 
        moreText.style.display = "inline";
      }
    }

    function readMore(ReadMore) {
      let sebelum = document.querySelector(`.Read-more[id="${ReadMore}"] .sebelum`);
      let moreText = document.querySelector(`.Read-more[id="${ReadMore}"] .more`);
      let btnText = document.querySelector(`.Read-more[id="${ReadMore}"] .sesudah`);
  
      if (sebelum.style.display === "none") {
          sebelum.style.display = "inline";
          btnText.textContent = "Baca lainnya";
          moreText.style.display = "none";
      } else {
          sebelum.style.display = "none";
          btnText.textContent = "Baca lebih sedikit";
          moreText.style.display = "inline";
      }
  }
    
    
  