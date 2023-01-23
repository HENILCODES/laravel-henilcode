<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
            <div class="container my-5 py-4">         
                <div class="text-center">
                    <h2 class="fw-bold">Admin</h2>
                </div>
                <div class="text-end pb-4 d-flex justify-content-between">
                    <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                    <a href="/signup" class="btn btn-success shadow">Add</a>
                </div>
                <div class="overflow-auto" style="height: 600px;">

                    <table class="table table-primary text-center table-responsive table-bordered">
                        <thead class="table-borderless table-dark">
                            <th>ID</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>password</th>
                            <th>roll</th>
                            <th>Update time</th>
                            <th>Create time</th>
                            <th>Action</th>
                        </thead>
                        <tbody id="Search_table" class="overflow-auto">
                            @foreach ($data as $item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['name']}}</td>
                                <td>{{$item['email']}}</td>
                                <td> 
                                    @if ($item['password'])
                                        ****
                                    @endif
                                </td>
                                <td>{{$item['roll']}}</td>
                                <td>{{$item['updated_at']}}</td>
                                <td>{{$item['created_at']}}</td>
                                <td>
                                   <a class="btn btn-success bi bi-pencil me-3"></a>
                                   <a class="btn btn-danger bi bi-trash"></a=>
                               </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/jquery-3.6.0.js"></script>
<script src="../js/search.js"></script>
</html>