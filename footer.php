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

let box = document.querySelectorAll('.slide');
let s = box.length;

for (j = 0; j < s; j++) {
  box[j].addEventListener('click', ()=> {
    const x = document.querySelectorAll('.element').length;

    let counter = 1;
    var y = document.querySelectorAll('.next');

    document.querySelectorAll('.next').forEach(item => {
        item.addEventListener('click', event => {
            if (counter === x + 1) {
                document.getElementById('field' + counter).style.display = "none";
                counter = x + 1;
                document.getElementById('field' + counter).style.display = "block";
            } else {
                document.getElementById('field' + counter).style.display = "none";
                counter++;
                document.getElementById('field' + counter).style.display = "block";
            };
        });
    });
  })
}

</script>
<?php wp_footer(); ?>
</body>
</html>
