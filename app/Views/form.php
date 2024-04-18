<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Edição</title>
</head>

<body>
    <div id="app" class="container mt-5">
        <?php echo form_open('user/store') ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" v-model="user.username" name="username" id="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" v-model="user.firstname" name="firstname" id="firstname" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" v-model="user.lastname" name="lastname" id="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" v-model="user.email" name="email" id="email" class="form-control">
            </div>
            <input type="hidden" v-model="user.id" name="id">
            <input type="submit" value="Salvar" class="btn btn-primary">
        <?php echo form_close(); ?>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                user: {
                    username: '<?php echo isset($user['username']) ? $user['username'] : ''; ?>',
                    firstname: '<?php echo isset($user['firstname']) ? $user['firstname'] : ''; ?>',
                    lastname: '<?php echo isset($user['lastname']) ? $user['lastname'] : ''; ?>',
                    email: '<?php echo isset($user['email']) ? $user['email'] : ''; ?>',
                    id: '<?php echo isset($user['id']) ? $user['id'] : ''; ?>'
                }
            }
        });
    </script>
</body>
</html>