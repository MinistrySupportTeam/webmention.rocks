<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <title><?= $this->e($title) ?></title>
  <link href="/semantic-ui/semantic.min.css" rel="stylesheet">
  <link href="/assets/styles.css" rel="stylesheet">
  <script src="/assets/jquery-1.11.3.min.js"></script>
  <script src="/semantic-ui/semantic.js"></script>

  <?= isset($link_tag) ? $link_tag : '' ?>

</head>
<body>

<?= $this->section('content') ?>

</body>
</html>
