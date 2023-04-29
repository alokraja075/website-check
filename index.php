<?php
if (isset($_GET['q'])) {
  $query = $_GET['q'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if (isset($query)): ?>
  <title>Search Results for "<?php echo $query; ?>" | My Website</title>
  <meta name="description" content="Find the best results for '<?php echo $query; ?>' on My Website. We offer a wide range of solutions to help you find what you're looking for.">
  <?php else: ?>
  <title>My Website</title>
  <meta name="description" content="Welcome to My Website.">
  <?php endif; ?>
</head>
<body>
  <h1>Welcome to My Website</h1>
  <?php if (isset($query)): ?>
  <p>Search Results for "<?php echo $query; ?>"</p>
  <?php endif; ?>
</body>
</html>
