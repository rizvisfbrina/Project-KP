<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <h1>INVOICE</h1>
      <div id="company" class="clearfix">
        <div>PT. Pelindo Daya Sejahtera</div>
        <div>Jl. Perak Timur 480 Surabaya,<br /> (031) 51166384</div>
        <div>(031) 51166386</div>
        <div><a href="mailto:info@ptpds.co.id">info@ptpds.co.id</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT</span> Website development</div>
        <div><span>CLIENT</span> John Doe</div>
        <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
        <div><span>DATE</span> <?= date_format(date_create($cart->date_buy), "d M Y"); ?></div>
        <div><span>DUE DATE</span> September 17, 2015</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">SERVICE</th>
            <th class="desc">DESCRIPTION</th>
            <th>PRICE</th>
            <th>QTY</th>
            <th>TOTAL</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($cartData as $cart): ?>
          <tr>
            <td class="service"><?= $cart->product_name; ?></td>
            <td class="desc">Creating a recognizable design solution based on the company's existing visual identity</td>
            <td class="unit">Rp. <?= number_format ( $cart->price * $cart->quantity, 2 );?></td>
            <td class="qty"><?= $cart->quantity;?></td>
            <td class="total">$1,040.00</td>
          </tr>
        <? endforeach; ?>
          <tr>
            <td colspan="4">SUBTOTAL</td>
            <td class="total">Rp <?= number_format( $totalPrice, 2); ?></td>
          </tr>
          <tr>
            <td colspan="4">TAX 10%</td>
            <td class="total">$1,300.00</td>
          </tr>
          <tr>
            <td colspan="4" class="grand total">GRAND TOTAL</td>
            <td class="grand total">Rp <?= number_format( $totalPrice, 2); ?></td>
          </tr>
        </tbody>
      </table>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>