<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Users</title>
    <style>
        ul.pagination li {
            display: inline;
        }

        ul.pagination li a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .active {
            background-color: #4CAF50;
            color: white;
        }

        ul.pagination li a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div id="app" class="container mt-5">
        <a href="user/create" class="btn btn-success mb-3">Novo Usuário</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
            <tr v-for="user in users">
                <td>{{ user.id }}</td>
                <td>{{ user.username }}</td>
                <td>{{ user.firstname }}</td>
                <td>{{ user.lastname }}</td>
                <td>{{ user.email }}</td>
                <td>
                    <a :href="'user/edit/' + user.id">Editar</a>
                    -
                    <a :href="'user/delete/' + user.id" @click.prevent="confirmDelete(user.id)">Excluir</a>
                </td>
            </tr>
        </table>
        <?php echo $pager->links(); ?>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                users: <?php echo json_encode($users); ?>
            },
            methods: {
                confirmDelete(userId) {
                    if (confirm('Deseja excluir o usuario?')) {
                        window.location.href = 'user/delete/' + userId;
                    }
                }
            }
        });
    </script>
</body>
</html>
