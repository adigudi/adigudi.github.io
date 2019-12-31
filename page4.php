<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adi Gudi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>

    <div class="header">
        <h1>Contact</h1>
    </div>

    <div class="topnav">
      <a class="active" href="index.html">Home</a>
      <a href="page1.html">About Adi</a>
      <a href="page2.html">My Work</a>
      <a href="page3.html">Blog</a>
      <a href="page4.php">Contact</a>
    </div>
<main>
  <p>Send Email<p>
  <form class="contact-form" action="contactform.php" method="post">
    <input type="text" name="name" placeholder="Full Name">
    <input type="text" name="mail" placeholder="Your email">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="message"placeholder="Message"></textarea>
    <button type="submit" name="submit">SEND MAIL</button>
  </form>
</main>
</body>

</html>
