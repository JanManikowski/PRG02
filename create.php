<?php
require_once 'includes/database.php';

if (isset($_POST['submit'])){
    $artist = $_POST['artist'];
    $album = $_POST['album'];
    $genre = $_POST['genre'];
    $tracks = $_POST['tracks'];
    $img = $_POST['img'];
    $stmt = $mysqli->prepare ("select * from albums");

    $stmt = mysqli->prepare("INSET INTO albums (artist, album, genre, tracks, img) VALUES (?, ?, ?, ?, ?,)");
    $stmt->bind_param('sssss', $artist, $album, $genre, $tracks, $img);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Album info</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">
                            <div class="form group">
                                <label>Artist</label>
                                <input required type="text" name ="artist" id="artist" class="form-control">
                            </div>
                            <div class="form group">
                                <label>Album</label>
                                <input required type="text" name="album" id="album" class="form-control" value="">
                            </div>
                            <div class="form group">
                                <label>Genre</label>
                                <input required type="text" name="genre" id="genre" class="form-control" value="">
                            </div>
                            <div class="form group">
                                <label>Album</label>
                                <input required type="text" name="album" id="album" class="form-control" value="">
                            </div>
                            <div class="form group">
                                <label>Tracks</label>
                                <input required type="text" name="tracks" id="tracks" class="form-control" value="">
                            </div>
                            <div class="form group">
                                <label>Image</label>
                                <input required type="text" name="album" id="album" class="form-control" value="">
                            </div>

                            <div class="form-group pull-right">
                                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
