
<html>
<head></head>
<body>
<!--------------- 1-------------->
<input  id="user" type="text" placeholder="username">
<input  id="agree" type="checkbox"> I agree
<select id="course">
<option value="2680">COMP 2680</option>
<option value="3540" selected>COMP 3540</option>
</select>
<input type="radio" name="lvl" value="ug" checked> Undergrad
<input type="radio" name="lvl" value="gr"> Grad
<button onclick="readAll()">Read</button>
<script>
function readAll() {
const u  = document.getElementById("user").value;   
const ok = document.getElementById("agree").checked;
const c  = document.getElementById("course").value; //"3540"
const lvl = document.querySelector('input[name="lvl"]:checked').value;
console.log(u, ok, c, lvl);
}
</script>


<!----------------2------------>
<form action="search.php" method="get">
<input name="q" placeholder="search TRUQA">
<button>Search</button>
</form>

<!-- Browser requests:
search.php?q=parking
visible • bookmarkable
length-limited
PHP reads: $_GET["q"] -->

<!----------------3------------------------->
<form action="login.php" method="post">
<input name="user">
<input name="pw" type="password">
<button>Sign in</button>
</form>

<!-- URL stays clean:
login.php
not in URL/history; no size limit
PHP reads: $_POST["user"] -->

</body>
</html>
