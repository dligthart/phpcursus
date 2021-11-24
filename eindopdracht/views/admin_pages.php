<?php $title = 'Admin Page Edit' ?>

<?php require 'components/header.php'; ?>

<body>
    <?php require 'components/admin_menu.php'; ?>
    <?php require 'components/logout.php'; ?>
    <?php require 'components/menu.php'; ?>


    <h1>Admin Pages</h1>

    <div style="margin-top:20px;">
        <table border="1" width="100%">
            <tr>
                <td>ID</td>
                <td>TITLE</td>
                <td>CONTENT</td>
                <td>STATUS</td>
                <td>ACTION</td>
            </tr>
            <?php
            foreach ($params[0] as $page) : ?>
                <tr>
                    <td>
                        <?php echo $page['id']; ?>
                    </td>

                    <td>
                        <?php echo $page['title']; ?>
                    </td>

                    <td>
                        <?php echo $page['content']; ?>
                    </td>

                    <td>
                        <?php echo $page['status']; ?>
                    </td>

                    <td>
                        <ul>
                            <li>
                                <?php
                                if ($page['status'] === 'draft') {
                                    echo '<a href="/admin/pages/?id=' . $page['id'] . '&action=publish">publish</a>';
                                } else {
                                    echo '<a href="/admin/pages/?id=' . $page['id'] . '&action=unpublish">unpublish</a>';
                                } ?>
                            </li>

                            <li>
                                <a href="/admin/page/edit/?id=<?php echo $page['id'] ?>">edit</a>
                            </li>

                            <li>
                                <a href="/newpage/?id=<?php echo $page['id'] ?>">show</a>
                            </li>

                            <li>
                                <a href="/admin/pages/?id=<?php echo $page['id'] ?>&action=delete">delete</a>
                            </li>

                        </ul>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
    <?php require 'components/footer.php'; ?>