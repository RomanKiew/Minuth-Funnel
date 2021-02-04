function slide(event){
    const x = document.querySelectorAll('.element').length;

    let counter = 1;
    var y = document.querySelectorAll('.next');

    document.querySelectorAll('.next').forEach(item => {
        item.addEventListener('click', event => {
            if (counter === x + 1) {
                counter = x + 1;
                document.getElementById('schritt' + counter).style.display = "block";
            } else {
                document.getElementById('schritt' + counter).style.display = "none";
                counter++;
                document.getElementById('schritt' + counter).style.display = "block";
            };
        });
    });
  }
