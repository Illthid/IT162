<!--Below will be Footer.php -->
<footer>
  <p><small>&copy; 2020-<?=date("Y")?> by
    <a href="contact.php">David Barnette</a>, All Rights Reserved ~
    <a id="html-checker" href="#">Check HTML</a> ~
    <a href="https://jigsaw.w3.org/css-validator/check?uri=referer">Check CSS</a></small>
  </p>
</footer>
<!-- End Footer -->
</main>
<!-- End Wrapper -->
<script>
//https://tinyurl.com/dynamic-html-checker
document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);

//manages mobile nav
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
