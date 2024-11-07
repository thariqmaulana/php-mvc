<!-- 
/**Aturan
 * Controller Home maka di view bikin folder Home. functionnya index, nama file index
 */ -->
 <!-- 
  Jika ingin Membuat logic di view maka logic ringan saja.
  itupun logic yang berkaitan dengan view, misal perulangan.
  yang kompleks tetap di controller
  -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $model['title'] ?></title>
</head>
<body>
  <h1><?= $model['content'] ?></h1>
</body>
</html>