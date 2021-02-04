<footer></footer>
<script src="https://kit.fontawesome.com/8928e65948.js" crossorigin="anonymous"></script>
<script type="text/javascript">
let starts = document.querySelectorAll('.start');
let l = starts.length;

for(i=0;i<l;i++) {
  starts[i].addEventListener("click", ()=> {
    let c = document.getElementById('schritt1');
    let all = document.querySelector('body');
    c.classList.toggle('toggled');
    all.classList.toggle('toggled');
  })
}

let starts = document.querySelectorAll('.start');
let l = starts.length;

for(i=0;i<l;i++) {
  starts[i].addEventListener("click", ()=> {
    let c = document.getElementById('schritt1');
    let all = document.querySelector('body');
    c.classList.toggle('toggled');
    all.classList.toggle('toggled');
  })
}
</script>
<?php wp_footer(); ?>
</body>
</html>
