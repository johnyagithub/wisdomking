$(function () {
  var x, i, j, l, ll, selElmnt, a, b, c, img, s;
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    if (selElmnt.options[selElmnt.selectedIndex].getAttribute("img") !== null) {
      imgIndex = "background-image: url(assets/images/game1/" + selElmnt.options[selElmnt.selectedIndex].getAttribute("img") + ");";
    } else {
      imgIndex = "";
    }
    a.setAttribute('style', imgIndex)
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    s = selElmnt.options[selElmnt.selectedIndex].getAttribute("value");
    x[i].appendChild(a);
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 0; j < ll; j++) {
      c = document.createElement("DIV");
      if (selElmnt.options[j].getAttribute("img") !== null) {
        img = "background-image: url(assets/images/game1/" + selElmnt.options[j].getAttribute("img") + ");";
      } else {
        img = "";
      }
      c.setAttribute('style', img)
      if(s === selElmnt.options[j].getAttribute("value")){
        c.setAttribute("class", "same-as-selected");
      }
      c.setAttribute('value', selElmnt.options[j].getAttribute("value"));
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function (e) {
        var y, i, k, s, h, sl, yl, a, id, n;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;

        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.setAttribute('style', this.getAttribute("style"))
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");

            a = this.closest('.custom-select').getAttribute('data-action');
            id = this.getAttribute("value");
            n = this.innerHTML;
            myAction(a, id, n);
            break;
          }
        }
        h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
  function closeAllSelect(elmnt) {
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  document.addEventListener("click", closeAllSelect);
});