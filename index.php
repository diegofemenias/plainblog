<?php
include("header.php");
include("db.php");
//  URL validation and sanitization
$slug = $_SERVER['REQUEST_URI'];
$slug = str_replace("<","",$slug);
$slug = str_replace(">","",$slug);
$slug = str_replace("script","",$slug);
$slug = str_replace("DELETE","",$slug);
$slug = str_replace("INSERT","",$slug);
$slug = str_replace("UPDATE","",$slug);
$slug = str_replace("?","",$slug);
$slug = str_replace("&","",$slug);
$slug = str_replace("shell","",$slug);
$slug = str_replace("wget","",$slug);
$slug = str_replace("cgi","",$slug);

$slug = strip_tags($slug);
$slug = filter_var ($slug, FILTER_SANITIZE_STRING); 
$postLastSlash = strrpos($slug, '/', 0);
$slug = substr($slug,$postLastSlash + 1);
// END URL VALIDATION
?>

<div class="container" style="max-width:100%;">
    <div class="row">
        <!-- MENU -->
        <div class="col-md-3" style="padding: 15px; background:#ccc; ">
            <a href="index.php"
                class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
                <span>
                    <h3>SOY TU GURÚ</h3>
                </span>
            </a>
            <ul class="list-unstyled ps-0">

                <?php
                // COMIENZA ITERADOR CATEGORIAS
                $res = $db->query("SELECT * FROM categories WHERE id > 1 ORDER BY title");
                $i = 0;
                while ($row = $res->fetchArray()) {
                    ?>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-baseline rounded border-0"
                            data-bs-toggle="collapse" data-bs-target="#home-collapse-<?php echo $i; ?>"
                            aria-expanded="false">

                            <?php
                            // MOSTRAR TITULO
                            echo $row['title'];
                            ?>

                        </button>
                        <div class="collapse" id="home-collapse-<?php echo $i; ?>" style="">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <?php
                                // COMIENZA ITERADOR POSTS
                                $resPost = $db->query("SELECT * FROM posts WHERE id_category=" . $row['id'] . " ORDER BY title");
                                while ($rowPost = $resPost->fetchArray()) {
                                    ?>
                                    <li><a href="<?php echo $rowPost['slug']; ?>"
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
                    $i++;
                }
                ?>

            </ul>
            <!-- FIN MENU -->
        </div>
        <!-- CONTENIDO -->
        <div class="col-md-9" style="">
            <?php
            // Toma el ID

            // Valida que el ID sea numerico y que no sea un numero sumamente grande
            if ($slug == "" || $slug == "index.php" ) {
                $resViewPost = $db->query("SELECT * FROM posts WHERE id = 1");
                while ($rowPost = $resViewPost->fetchArray()) {
                    echo "<div style='padding:15px'>";
                    echo "<h3>" . $rowPost['title'] . "</h3>";
                    echo "<p>" . $rowPost['body'] . "</p>";
                    echo "</div>";
                }
            } else {
                $sql = "SELECT * FROM posts WHERE slug='" . $slug . "' AND id > 1";
                $resViewPost = $db->query($sql);
                while ($rowPost = $resViewPost->fetchArray()) {
                    echo "<div style='padding:15px'>";
                    echo "<h3>" . $rowPost['title'] . "</h3>";
                    echo "<p>" . $rowPost['body'] . "</p>";
                    echo "</div>";
                }
            }
            ?>

            <!-- FIN CONTENIDO -->

        </div>
    </div>
</div>

<?php
include("footer.php");

?>
</body>