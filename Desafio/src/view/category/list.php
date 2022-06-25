<h1>Lista categorias</h1>

<table class ="table table-gober table-striped">
    <thead class = "table-dark">
        <tr>
            <th>#ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        ?<?php
            while($category = $data->fetch(\PDO::FETCH_ASSOC)){
                /*$id = $category['id'];
                $name = $category['name'];
                $description = $category['description'];
                todo esse conjnto de variáveis por ser substituido pela função extract, como está abaixo*/
                extract($category);
                echo '<tr>';
                    echo "<td>{$id}</td>";
                    echo "<td>{$name}</td>";
                    echo "<td>{$description}</td>";
                    echo "<td>
                        <a href='/categorias/editar?id={$id}' class='btn btn-warning btn-sm'>Editar</a>
                        <a href='/categorias/excluir?id={$id}' class='btn btn-danger btn-sm'>Excluir</a>
                    </td>";
                echo'</tr>';
            }
        ?>
    </tbody>
</table>