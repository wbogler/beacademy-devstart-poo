<h1>Editar categoria</h1>

<form action="" method="post">
    <label for="name">Nome</label>
    <input value="<?php echo $data['name'] ?>" id="name" name="name" type="text" class="form-control mb-3">

    <label for="name">Descrição</label>
    <textarea id="description" name="description" type="text" class="form-control mb-3"><?php echo $data['description']?></textarea>
    <br>
    <button class="btn btn=primary">Enviar</button>
</form>