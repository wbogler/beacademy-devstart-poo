<h1>Listar produtos</h1>

<table class="table table-hover table-striped">
    <thead>
        <th>#ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Imagem</th>
        <th>Preço</th>
        <th>Disponível</th>
        <th>Cadastro</th>
        <th>Ações</th>
    </thead>

    <tbody>
        <?php
            while($product = $data->fetch(\PDO::FETCH_ASSOC)){
                extract($product);
                echo "
                    <tr>
                        <td>{$id}</td>
                        <td>{$name}</td>
                        <td>{$description}</td>
                        <td><img width='100px'src='{$photo}'></td>
                        <td>R$ {$valor}</td>
                        <td>{$category_id}</td>
                        <td>{$quantity}</td>
                        <td>{$created_at}</td>
                        <td>
                            Editar/Excluir
                        </td>
                    </tr>
                ";
            }
        ?>
    </tbody>
</table>