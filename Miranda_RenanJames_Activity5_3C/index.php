<?php    
declare(strict_types=1);
?>



<?php

$media_vault = [
    ['id' => 1, 'filename' => 'Picture0021', 'size_kb' => 100, 'type' => 'Graphic' ],
    ['id' => 2, 'filename' => 'Music.mp4', 'size_kb' => 500, 'type' => 'Audio', ],
    ['id' => 3, 'filename' => 'TheGreatestShow', 'size_kb' => 1000, 'type' => 'Video', ]
];



function uploadMedia(array &$media_vault, int $id, string $filename, float $size_kb, string $type = "Graphic"): void {

$media_vault[] = [
    "id" => $id,
    "filename" => $filename,
    "size_kb" => $size_kb,
    "type" => $type,
    ];

}
    


function deleteMedia(array &$media_vault, int $id): void{
foreach($media_vault as $index => $file){
    if ($file['id'] === $id ){

        unset($media_vault[$index]);

        break;
        }
    }
}





// ==========================================
// PROVIDED CONTROLLER CODE (DO NOT MODIFY LOGIC)
// ==========================================

// 1. Handle Form Submission (Upload Asset)
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['upload'])) {
    $new_id = rand(400, 999); // Simulates a unique Database ID
    $new_filename = $_POST['filename'];
    $new_size = (float)$_POST['size_kb']; 
    $new_type = $_POST['type'];
    
    // --> STUDENT TASK: Call your uploadMedia() function here, 
    // passing $media_vault, $new_id, $new_filename, $new_size, and $new_type.
    uploadMedia($media_vault,$new_id,$new_filename,$new_size, $new_type);
  
}

// 2. Handle Action Click (Delete Asset)
if (isset($_GET['delete_id'])) {
    $id_to_delete = (int)$_GET['delete_id'];
    
    // --> STUDENT TASK: Call your deleteMedia() function here,
    // passing $media_vault and $id_to_delete.
    deleteMedia($media_vault, $id_to_delete);
}

function formatFileSize(float $size_kb): string{
    if($size_kb >= 1024) {
        $size_mb = number_format($size_kb/ 1024, 2);
            return $size_mb . " MB ";
        
    }
    return number_format($size_kb, 2) . " KB ";
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cyber-Agency | Media Vault</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app-container">
        <header>
            <h1>PROJECT_VAULT <span class="version">v3.0</span></h1>
            <p>Digital Asset Management System</p>
        </header>

        <section class="form-section">
            <form action="index.php" method="POST">
                <div class="input-group">
                    <label>File Name</label>
                    <input type="text" name="filename" required placeholder="e.g. final_render.mp4">
                </div>
                <div class="input-group">
                    <label>File Size (KB)</label>
                    <input type="number" step="0.01" name="size_kb" required placeholder="0.00">
                </div>
                <div class="input-group">
                    <label>Asset Type</label>
                    <select name="type" required>
                        <option value="Graphic">Graphic</option>
                        <option value="Video">Video</option>
                        <option value="Audio">Audio</option>
                    </select>
                </div>
                <button type="submit" name="upload" class="btn-primary">Upload Asset</button>
            </form>
        </section>
        <section class="table-section">
            <table>
                <thead>
                    
                    <tr>
                        <th>ID</th>
                        <th>File Name</th>
                        <th>Type</th>
                        <th>Optimized Size</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <?php foreach($media_vault as $file): ?>
                          
                            <td>
                            <?php echo $file['id'] ?>
                            </td>
                            
                            <td class="file-name"><?php echo $file['filename']?></td>

                            <td>
                                <span class="badge badge-<?= strtolower($file['type']) ?>">
                                    <?= htmlspecialchars($file['type'])?>
                                    </span>
                                  </td>
                            <td class="file-size"><?php echo formatFileSize( $file['size_kb']) ?></td>
                      
                            <td>
                                <a href="?delete_id=<?= $file['id'] ?>" class="btn-delete">Remove</a>
                            </td>
    
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
        </section>
    </div>
</body>
</html>
