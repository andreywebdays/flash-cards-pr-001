<main class="main-entry">
    <h2 id="enterNumber">Enter a number:</h2>
    <!-- with PHP_SELF we submit the form to the same page (the page we are on) -->
    <form class="main-entry__form" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
        <input 
            class="main-entry__input" 
            id="num"
            name="num"
            aria-labelledby="enterNumber"
            type="text"
            maxlength="2"
            autofocus
            required>
        <button class="main-entry__button">Go!</button>
    </form>
</main>