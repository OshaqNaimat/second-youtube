<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boostrap.php'?>
</head>
<body>
    <?php include './navbar.php'?>
    <?php 
    if(isset($_SESSION['comment_added'])){
    ?>
    <div class="toast-comment p-2 bg-info text-white mt-3 position-fixed top-0 z-3 rounded-pill" 
    style="left: 50%;transform: translateX(-50%);transition: all 0.4s;">Comment Added Successfully</div>
   <?php }?>
    <div class="col-11 mx-auto ">
        
            <div class="row">
                <div class="col-lg-9">
                    <video class="rounded-4 object-fit-cover my-single-video" src="./videos/<?php echo $_GET['video']?>" width="100%" height="450px" controls></video>
                    <h4 class="my-2"><?php echo $_GET['title']?></h4>
                  <div class="row align-items-center">
                    <div class="col-md-6 d-flex align-items-center my-2">
                        <div class="d-flex align-items-center gap-3">
                            <img src="./thumbnail/chatgpt git.png" width="50px" height="50px" style="clip-path: circle();" alt="">
                            <div class="">
                                <h6>Channel name</h6>
                                <p class="text-secondary m-0 fs-6">650 subscribers</p>
                            </div>
                        </div>
                       <button class="btn btn-outline-dark mx-3 rounded-pill">Subscribe</button>
                    </div>
                    <div class="col-md-6 d-flex gap-3">
                        <div class="d-flex bg-body-secondary rounded-pill p-2 px-3 gap-2 align-items-center">
                            <i class="bi bi-hand-thumbs-up "></i>
                            <p class="m-0">|</p>
                            <i class="bi bi-hand-thumbs-down "></i>
                        </div>

                         <div class="d-flex bg-body-secondary rounded-pill p-2 px-3 gap-2 align-items-center">
                            <i class="bi bi-share"></i>
                            <p class="m-0">Share</p>
                         </div>

                          <div class="d-flex bg-body-secondary rounded-pill p-2 px-3 gap-2 align-items-center">
                            <i class="bi bi-download"></i>
                            <p class="m-0">Download</p>
                          </div>

                           <div class="d-flex bg-body-secondary gayab d-xl-block d-lg-block d-md-none rounded-pill p-2 px-3 gap-2 align-items-center">
                            <i class="bi bi-three-dots "></i>
                           </div>
                    </div>
                  </div>



                  <!-- comment section -->
                   <form action="./add-coment.php" class="d-flex gap-2 w-100 mt-3 mb-2" method="post">
                    <img src="https://images.vexels.com/media/users/3/147101/isolated/lists/b4a49d4b864c74bb73de63f080ad7930-instagram-profile-button.png"
                    width="30px" height="30px" class=" " alt="">
                    <input type="text" name="comment" class="w-100" style="border: none;border-bottom: 2px solid lightgray;outline-width: 0;" placeholder="Add a comment...">
                    <input type="hidden" name="video-id" readonly value="<?php echo $_GET['id']?>">
                    <!-- <div class="d-flex justify-content-end">
                        <button class="btn btn-body-secondary rounded-pill p-2">Cancel</button>
                        <button class="btn btn-primary rounded-pill p-2">Comment</button>
                    </div>    -->
                </form>
                      
                   <div  class="d-flex gap-2 w-100 mt-3">
                    <img src="https://images.vexels.com/media/users/3/147101/isolated/lists/b4a49d4b864c74bb73de63f080ad7930-instagram-profile-button.png"
                    width="30px" height="30px" class=" " alt="">
                    <div class="">
                    <div class="d-flex align-items-center gap-2">
                        <h6 class="fw-semibold m-0">Username</h6>
                        <p class="m-0 text-secondary fs-small">
                            Time hours ago
                        </p>
                    </div>
                      <p class="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, modi.</p>
                    </div>
                    </div>
</div>

                <div class="col-lg-3">
                     <?php 
        include './config.php';
        $videos = "SELECT video_preview.id AS video_id,video_preview.title,video_preview.description,video_preview.video,video_preview.thumbnail,
video_preview.schedule,users.id,users.Name FROM video_preview JOIN users ON video_preview.user_id = users.id
";
        $result = mysqli_query($connection,$videos);
        foreach($result as $item){
    ?>
                 
                    <a href="./video-play.php?id=<?php echo $item['video_id'] ?>&title=<?php echo $item['title'] ?>&video=<?php echo $item['video']?>&thumbnail=<?php echo $item['thumbnail'] ?>"
                    class="row  mt-2 align-items-start text-decoration-none text-dark text-capitalize fw-semibold my-single-image">
                    <div class="col-sm-5">
                        <img src="./thumbnail/<?php echo $item['thumbnail'] ?>"
                            class="rounded-3 thumbnail-image object-fit-cover" height="100px" width="100%" alt="">
                        <video autoplay muted height="100px" width="100%"
                            class="object-fit-cover thumbnail-video rounded-4 d-none"
                            src="./videos/<?php echo $item['video'] ?>"></video>
                    </div>
                    <div class="col-sm-7 p-0">
                        <p class="m-0">
                            <?php echo $item['title'] ?>
                        </p>
                        <p class="text-secondary text-capitalize m-0 text-sm">
                            <?php echo $item['Name']?>
                        </p>
                        <p class="text-secondary m-0 text-sm">
                            110M views . 5 years ago
                        </p>
                    </div>
                </a>
                       
                       
                 <?php }?>
                
            </div>
            
    </div>
        </div>
      <script>
    let thumbnail_image = document.querySelectorAll('.thumbnail-image')
    let thumbnail_video = document.querySelectorAll('.thumbnail-video')




    thumbnail_image.forEach((item, index) => {
        item.addEventListener('mouseover', () => {
            item.classList.add('d-none')
            thumbnail_video[index].classList.remove('d-none')
        })

    })

    thumbnail_video.forEach((item, index) => {
        item.addEventListener('mouseout', () => {
            item.classList.add('d-none')
            thumbnail_image[index].classList.remove('d-none')
        })

    })



    let toastComment = document.querySelector('.toast-comment')
    if (toastComment) {
        setTimeout(() => {
            toastComment.style.transform = 'translate(-50%,-200px)'
        }, 3000);
    }
    </script>
    
</body>
</html>