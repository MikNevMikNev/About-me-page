<div class="aboutme">
    <h1 class="welcome"><?php echo($welcometext); ?></h1>

    <div class="content">
        <img class="photo" src="<?php echo($photo); ?>" alt="Photo">
        <div class="aboutmetext">
            <p>My name is <?php echo($name . " " . $surname); ?>.</p>
            <p>I'm <?php echo($age); ?> years old. </p>
            <p>And my hometown is <?php echo($city); ?>!</p><br>
            <div class="knowledge">
                <p>1 plus 1 is <?php echo(1 + 1) ?></p>
                <p>2 minus 2 is <?php echo(2 - 2) ?></p>
                <p>6 divide by 3 is <?php echo(6 / 3) ?></p>
                <p>2 ** 16 is <?php echo(2 ** 16) ?></p> </div>
            
        </div>
    </div>
</div>