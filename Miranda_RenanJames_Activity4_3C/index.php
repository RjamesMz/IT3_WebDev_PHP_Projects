<?php declare(strict_types=1) ?>
<?php

 $nav_items = ["Home", "Media Vault", "Analytics", "Profile",];
 $vault_stats = [
    'storage_usage' => .85,
    'file_count' => 1240,
    'subscription_tier' => "Pro Plan"
];
$media_library = [
    ['id' => '001', 'file_name' => 'Ticket001', 'type' => 'Document', 'file_size' => (float)100],
    ['id' => '002', 'file_name' => 'Music.mp4', 'type' => 'MP4', 'file_size' => (float)500],
    ['id' => '003', 'file_name' => 'TheGreatestShow', 'type' => 'Video', 'file_size' => (float)1000],
];

$new_upload = [
     ['id' => '004', 'file_name' => 'Client_Logo.png', 'type' => 'PNG', 'file_size' => (float)20],
     ['id' => '005', 'file_name' => 'Big Hero 6', 'type' => 'Video', 'file_size' => (float)1000],
];

$all_media =[ ...$media_library, ...$new_upload];

?>

<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Media Vault V4 | Block C</title>
    </head>
<body>
    <?php if (isset($all_media)): ?>
    <header>
        <div class="vault-brand">MEDIA_VAULT_v4</div>
        <nav>
            <ul>
                <?php foreach ($nav_items as $nav_item):?>
                <tr>
                    <td><?php echo $nav_item . " |" ?></td>
                </tr>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>

    <main>
        <div class="stats-container">
            <?php foreach ($vault_stats as $key => $value): ?>
                <div class="stat">
                    <strong><?php echo $key; ?>:</strong>
                    <?php echo $value; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <section class="vault-table">
            <h2>Current Library (<small> 
            <?php echo count($all_media) ?> items
            </small>)</h2>
            <table>
                <thead>
                    <tr>
                        <?php $all_keys = array_keys($all_media[0]);?>

                        <?php foreach($all_keys as $key):?> 
                        <th>
                            <?php echo $key ?> 
                        </th>
                        <?php endforeach; ?>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach($all_media as $media):?> 
                        <tr>
                            <?php foreach($media as $item):?>
                            <td>
                                <?php 
                                if($item === "Video"){
                                    echo "<span>$item</span>";;
                                }else{
                                    echo $item;
                                }
                                ?>
                            </td>
                            <?php endforeach; ?>
                        </tr>
                      <?php endforeach; ?>      
                    </tbody>
            </table>
        </section> 
    </main>
     <pre> 
    <!-- <?php var_dump()?> --> 
    </pre> 
    <?php endif; ?>
</body>
</html>
