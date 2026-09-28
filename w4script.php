<html>
<head>
</head>
<body>
<button id="ok">click Me</button>
<p id="out"></p>
<script>
const btn = document.getElementById("ok");
const out = document.getElementById("out");

function greet() { 
    out.textContent = "Clicked at " + new Date().toLocaleTimeString(); }
function shout() { 
    console.log("Second listener also ran!"); }

btn.addEventListener("click", greet);
btn.addEventListener("click", shout);     
// both run, in order
// btn.removeEventListener("click", shout); 
// needs the SAME function reference
</script>
<ul id="menu">
<li>Home</li><li>Courses</li><li>Contact</li>
</ul>
<script>
// ONE listener on the parent handles every <li>, even future ones
document.getElementById("menu").addEventListener("click", (e) => {
if (e.target.tagName === "LI") {
e.target.style.color = "orange";
console.log("You picked:", e.target.textContent);
}
});
document.addEventListener("keydown", (e) => console.log("key:", e.key));
document.addEventListener("mousemove", (e) => console.log(e.clientX, e.clientY));
</script>
</body>
</html>