
//change dashboard color
const setTheme = theme => document.documentElement.className = theme;


//Get the button:
var mybutton = document.getElementById("myBtn");
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/*drag drop*/
function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
  }
  
  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
  }
  
  /* START OF BOX-ACCORDION */
  var acc = document.getElementsByClassName("box-accordion");
  var i;
  
  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }
  /* END OF BOX-ACCORDION */
  
/* START OF SIDEBAR ACCORDION */
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
/* END OF SIDEBAR ACCORDION */
  
/*Menu button sidenav */
function openNav() {
  document.getElementById("menu").style.width = "210px";
}
function closeNav() {
  document.getElementById("menu").style.width = "0";
}
  
  /* When the user clicks on the button, 
  toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
    
    // Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
  
//pasisveikinimas

const today = new Date();
const time = today.getHours();

if (time >= 0 && time < 6){
  document.getElementById("pasisveikinimas").innerHTML = "Labas,db naktis!";
} else if (time >= 6 && time < 12) {
 document.getElementById("pasisveikinimas").innerHTML = "Labas rytas !" +
 "<br>Tai, k?? mes darome ??iandien ir dabar, lems tai, k?? darysim rytoj.<br>Alexandra Stoddard.";
} else if (time >= 12 && time < 18){
  document.getElementById("pasisveikinimas").innerHTML = "Laba diena !" +
  "<br>Tai, k?? mes darome ??iandien ir dabar, lems tai, k?? darysim rytoj.<br>Alexandra Stoddard.";
} else if (time >= 18 && time < 23) {
   document.getElementById("pasisveikinimas").innerHTML = "Labas vakaras !" + 
   "<br>Tai, k?? mes darome ??iandien ir dabar, lems tai, k?? darysim rytoj.<br>Alexandra Stoddard.";
} else {
  document.getElementById("pasisveikinimas").innerHTML = "Labas,db naktis !";
}

    