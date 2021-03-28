<h1>Thanks, sucker!</h1>

    <p>Your information has been recorded.</p>

    <?php
      $content = $_POST['name'].";".$_POST['section'].";".$_POST['card'].";".$_POST['card_type']."\n";

      file_put_contents("suckers.txt", $content, FILE_APPEND);
      $suckers = file_get_contents("suckers.txt");
    ?>

    <dl>
      <dt>Name</dt>
      <dd><?= $_POST['name'] ?></dd>

      <dt>Section</dt>
      <dd><?= $_POST['section'] ?></dd>

      <dt>Credit Card</dt>
      <dd><?= $_POST['card'] ?> (<?= $_POST['card_type']?>)</dd>
    </dl>

    <p>Here are all suckers who have submitted:<p>
    <pre><?= $suckers ?></pre>