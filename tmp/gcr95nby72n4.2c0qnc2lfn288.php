<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  </head>
  <body >
    <div class="container">
      <h2>all_citations  <a type="button" href="new/form" class="btn btn-success">Nouvelle citation</a></h2>
      <div class="list-group">
        <?php foreach (($all_citations?:[]) as $citation): ?>
          <a href="<?= $citation['id'] ?>" class="list-group-item"> <?= $citation['citation'] ?> </a>
       <?php endforeach; ?>
      </div>
    </div>
  </body>
</html>
