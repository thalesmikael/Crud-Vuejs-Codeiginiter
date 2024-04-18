<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Users - Mensagens</title>
</head>
<body>
    <div id="app" class="container mt-5">
        <div class="alert alert-info">
            {{ message }}
            <p class="mt-3"><a :href="baseURL">Página Inicial</a></p>
        </div>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                message: '<?php echo $message; ?>',
                baseURL: '<?php echo base_url(); ?>'
            }
        });
    </script>
</body>
</html>