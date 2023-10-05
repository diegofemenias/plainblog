<?php
include("header.php");
include("db.php");
?>

<main class="d-flex flex-nowrap">
    <!-- MENU -->
    <div class="flex-shrink-0 p-3" style="width: 280px;">
        <a href="index.php"
            class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-5 fw-semibold">SOY TU GURÚ</span>
        </a>
        <ul class="list-unstyled ps-0">

            <?php
            // COMIENZA ITERADOR CATEGORIAS
            $res = $db->query("SELECT * FROM categories ORDER BY title");
            while ($row = $res->fetchArray()) {
                ?>
                <li class="mb-1">
                    <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0"
                        data-bs-toggle="collapse" data-bs-target="#Xhome-collapse" aria-expanded="true">

                        <?php
                        // MOSTRAR TITULO
                        echo $row['title'];
                        ?>

                    </button>
                    <div class="collapse show" id="Xhome-collapse" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <?php
                            // COMIENZA ITERADOR POSTS
                            $resPost = $db->query("SELECT * FROM posts WHERE id_category=" . $row[id] . " ORDER BY title");
                            while ($rowPost = $resPost->fetchArray()) {
                                ?>
                                <li><a href="index.php?id=<?php echo $rowPost['id']; ?>"
                                        class="link-body-emphasis d-inline-flex text-decoration-none rounded">
                                        <?php echo $rowPost['title']; ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </li>
                <?php
                // FIN ITERADOR CATEGORIAS
            }
            ?>

        </ul>
        <!-- FIN MENU -->
    </div>
    <!-- CONTENIDO -->
            <?php 
            $id = $_GET['id'];
            if(!is_numeric($id)) { 
                echo "id no valido"; 
            } else {
                $resViewPost= $db->query("SELECT * FROM posts WHERE id=" . $id);
                while ($rowPost = $resViewPost->fetchArray()) {
                    echo "<h1>" . $rowPost['title'] . "</h1>";
                    echo $rowPost['body'];
                }
            }
            ?>
    <!-- FIN CONTENIDO -->
    <div>

    </div>
</main>

<?php
include("footer.php");

?>