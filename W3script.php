<h1 id = "top" > Hello </h1>
<p class="txt">Welcome to COMP 3540.</p>

<script>
    const h = document.getElementById("top");
    console.log(h.textContent);
    h.textContent = "Hello, DOM!";
    h.style.color = "red";
    h.setAttribute("title", "I was changed by JS");
    console.log(document.title);

</script>

<ul id="menu">
<li class="item active">Home</li>
<li class="item">Courses</li>
<li class="item">Contact</li>
</ul>
<script>
const first = document.querySelector("#menu li");      
const active = document.querySelector("li.active");    
// by class
const all = document.querySelectorAll("#menu .item");  // NodeList
all.forEach(li => li.style.padding = "6px 12px");
console.log(all.length);   // 3

first.style.color = "Green";
</script>

<p id="msg" style="border:2px solid gray">
    Watch me change.
</p>

<button onclick="paint()">Paint</button>

<script>
let painted = false;

function paint() {
    const p = document.getElementById("msg");

    if (!painted) {
        p.style.color = "green";
        p.style.backgroundColor = "#14213D";
        p.style.borderColor = "orange";
        painted = true;
    } else {
        p.style.color = "";
        p.style.backgroundColor = "";
        p.style.borderColor = "gray";
        painted = false;
    }
}
</script>

<script>

    display — element leaves the layout
    const box = document.getElementById("panel");
    // vanish, space collapses
    box.style.display = "none";
    // bring it back
    box.style.display = "block";
    // generic restore:
    box.style.display = "";

const box = document.getElementById("panel");
// invisible, gap remains
box.style.visibility = "hidden";
// visible again
box.style.visibility = "visible";
// bonus: opacity fades
box.style.opacity = "0.3";

</script>

<script>
const el = document.getElementById("panel");
el.offsetWidth;   
el.clientWidth;   
el.scrollWidth;   
 // content + padding + border  (px, number)
 // content + padding (no border/scrollbar)
 // full content width, incl. overflow
const r = el.getBoundingClientRect();
r.width; r.height; // rendered size (fractional px)
r.top;  r.left;   
el.offsetTop;     
 // position relative to the VIEWPORT
 // position relative to offsetParent
window.innerWidth; // viewport size
window.scrollY;   
 // how far the page is scrolle
</script>    