<?php
if (!isset($_GET["a"]) || !isset($_GET["b"])) header("location: exchange?a=btc&b=eth");

require("global.php");
$tab = "Exchange";

$coin_1 = strtoupper($_GET["a"]);
$coin_2 = strtoupper($_GET["b"]);

$coin_1_balance = $vault->get_balance($coin_1);
$coin_1_balance_str = number_format($coin_1_balance, 8, ".", "");

$coin_2_balance = $vault->get_balance($coin_2);
$coin_2_balance_str = number_format($coin_2_balance, 8, ".", "");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Exchange - Alphex</title>
    <?php include("templates/head.php"); ?>
  </head>
  <body>
    <?php include("templates/navbar.php"); ?>
    <div class="container-fluid">
      <br>
      <div class="row">
        <div class="col-sm-9">
          <?php include("chart/main.php"); ?>
          <br>
          <?php include("exch/alert/main.php"); ?>
          <div class="row mb-0">
            <div class="col-sm-3"><?php include("exch/limit_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("exch/market_buy/main.php"); ?></div>
            <div class="col-sm-3"><?php include("exch/limit_sell/main.php"); ?></div>
            <div class="col-sm-3"><?php include("exch/market_sell/main.php"); ?></div>
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4"><?php include("exch/bids/main.php"); ?></div>
            <div class="col-sm-4"><?php include("exch/asks/main.php"); ?></div>
            <div class="col-sm-4"><?php include("exch/trades/main.php"); ?></div>
          </div>
          <br>
          <?php include("exch/depth/main.php"); ?>
        </div>
        <div class="col-sm-3">
          <?php include("exch/markets/main.php"); ?>
          <br>
          <?php include("exch/open_orders/main.php"); ?>
          <br>
          <?php include("chat/main.php"); ?>
        </div>
      </div>
		</div>
    <?php include("templates/footer.php"); ?>
  </body>
</html>