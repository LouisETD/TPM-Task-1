<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Tenant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>Food Tenant Registration</h1>

    <p>Welcome !! This is Kuliner Event ! <p>
    <p>You have to register your food tenant to sell at the site on our event !</p>
    <a href ="/registration" type="button" class="btn btn-primary btn-lg">Click here to register !</a>

    <div>
        <p>List semua food tenant</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Tenant</th>
      <th scope="col">Tipe Makanan</th>
      <th scope="col">Asal Makanan</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($list_tenant as $tenant) 
        <tr>
        <th scope="row">{{ $tenant->id }}</th>
        <td>{{ $tenant->nama_tenant }}</td>
        <td>{{ $tenant->tipe_makanan }}</td>
        <td>{{ $tenant->asal_makanan }}</td>
        </tr>
    </tbody>
    </table>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>
</html>