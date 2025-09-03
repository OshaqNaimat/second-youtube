<?php include './boostrap.php'?>


<div class="d-flex categories overflow-hidden gap-3">
    
    <button class='btn rounded-3 btn-dark'>
        All
    </button>
    <?php 
        $content = [
        'Music',
        'Sports',
        'Movies',
        'Gaming',
        'Art',
        'Literature',
        'Dance',
        'Theater',
        'Photography',
        'Cooking',
        'Fitness',
        'Fashion',
        'Travel',
        'Technology',
        'Science',
        'History',
        'Education',
        'Crafts',
        'Gardening',
        'Comedy'
    ];
        for($i=0;$i<20;$i++){
            echo "<button class='btn rounded-3 bg-body-secondary'>
                    {$content[$i]}
                </button>";
        }
    ?>


</div>



<div class="row my-4">
    <?php 
        include './config.php';
        $videos = "SELECT * FROM video_preview";
        $result = mysqli_query($connection,$videos);
        foreach($result as $item){
    ?>
   
    <div class="col-xl-4 col-lg-6 col-md-6">
        <a href="./video-play.php?id=<?php echo $item['id']?>&title=<?php echo $item['title']?>&video=<?php 
        echo $item['video']?>&thumbnail=<?php echo $item['thumbnail']?> " class="card text-decoration-none overflow-hidden rounded-4 border-0 ">
            <img class="rounded-4 thumbnail-image object-fit-cover" height="250px"
                src="./thumbnail/<?php echo $item['thumbnail'] ?>" width="100%" alt="">
            <video controls muted height="250px" class="object-fit-cover thumbnail-video rounded-4 d-none"
                src="./videos/<?php echo $item['video'] ?>"></video>
            <div class="d-flex justify-content-between gap-2 py-3">
                <div class="d-flex  align-items-center gap-2">
                    <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D"
                        width="40px" height="40px" class="rounded-circle" alt="">
                    <div class="">
                        <h6 class="m-0" style="font-size:0.8rem">
                            <?php echo $item['title'] ?>
                        </h6>
                        <p class="text-secondary m-0" style="font-size:0.8rem">Username</p>
                        <p class="text-secondary m-0 d-flex gap-2 align-items-center" style="font-size:0.8rem">
                            110K views <i class="bi bi-circle-fill" style="font-size:0.2rem"></i> 4 hours ago
                        </p>

                    </div>
                </div>
                <i class="bi bi-three-dots-vertical"></i>
            </div>
        </a>
    </div>

    <?php 
        }
    ?>

</div>