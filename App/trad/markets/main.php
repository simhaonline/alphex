<ul class="nav nav-tabs">
  <li class="nav-item"><a class="nav-link active" href="?a=eth">BTC</a></li>
</ul>
<br>
<h5 class="fancy">Markets</h5>
<div id="markets_table"></div>

<script>
refresh_markets();

function refresh_markets()
{
  $("#markets_table").load("/trad/markets/retrieve.php?a=<?=htmlspecialchars($_GET["a"])?>&b=<?=htmlspecialchars($_GET["b"])?>", function() {
    setTimeout(refresh_markets, 1000);
  });
}
</script>