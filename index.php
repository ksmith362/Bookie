<?php
    include 'header.php'
?>

    <main>

        <div class="orbit" role="workout" aria-label="big hero" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="img/books1.jpg" alt="books">
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="img/books2.jpg" alt="books">
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="img/books3.jpg"alt="books">
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr"></span>
      <span class="show-for-sr" data-slide-active-label></span>
    </button>
    <button data-slide="1"><span class="show-for-sr"></span></button>
    <button data-slide="2"><span class="show-for-sr"></span></button>
  </nav>
</div>
<div class="whatyoucando1">
    <h2>What is Bookie?</h2>
  </div>
  <div class="whatcanyoudo">
  
    <img src="img/bookback.png">
    <p>Bookie is a public interface that allows you to search for books! Use the search box at the top to search for books by their title. Only admins are permitted to add, delete, and change the details of the books.</p>
</div>


<?php
    include 'footer.php';
?>