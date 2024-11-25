<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post" action="insert.php">
            <div class="mb-3">
                <label for="todo" class="form-label">Todo</label>
                <input type="text" class="form-control" id="todo" name="todo">
            </div>
            <button type="submit" class="btn btn-primary">Add Todo</button>
        </form>
        <table class="mt-5 table table-bordered">
            <thead>
                <tr>
                    <th>Todo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
include "koneksi.php";
$sql = "select * from todo";
$action = $conn->query($sql);
while ($data = $action->fetch_assoc()) {
    ?>
            <tbody>
                <tr>
                    <td><span class="<?=$data['status'] == 'done' ? 'text-decoration-line-through' : ''?>">
                            <?=$data['todo'];?>
                        </span>
                    </td>
                    <td>
                        <div class="d-flex gap-2">
                            <a href="check.php?id=<?=$data['id']?>" class="btn btn-primary">Check</a>
                            <a href="delete.php?id=<?=$data['id']?>" class="btn btn-danger">Hapus</a>
                        </div>
                    </td>
                </tr>
            </tbody>
            <?php
}
?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>