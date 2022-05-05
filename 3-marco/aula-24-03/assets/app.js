const menuToggler = document.querySelector('.menuToggler'),
      nav = document.querySelector('nav'),
      back = document.querySelector('.back'),
      exit = document.querySelector('.exit-btn a');

[menuToggler, back].forEach(e => e.onclick = () => [nav, back, document.body].forEach(e => e.classList.toggle("active"))) 

exit.onclick = () => location.href = 'index.php';