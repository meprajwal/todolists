<script>
    var gfg = document.URL;
    if((gfg == 'localhost/login?')|| (gfg == 'localhost/index'))
    {
        setTimeout(function () {
            document.getElementById('notification-area').style.display = 'none'}, 3000)
    }

document.querySelectorAll('a[href*="000webhost"]').forEach(e => e.remove());
</script>

</body>
</html>
