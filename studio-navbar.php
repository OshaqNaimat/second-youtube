<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boostrap.php'?>
    <style>
        @media (max-width:1000px){
            .search-bar{
                display: none;
            }
            .search-icon{
                display: block;
            }
        }
    </style>
</head>
<body>
    

<div class="d-flex justify-content-between p-3">
    <div class="d-flex gap-2 fs-3 align-items-center">
        <i class="bi bi-list"></i>
        <img src="https://vectorseek.com/wp-content/uploads/2022/02/Youtube-Studio-Logo-Vector.png" width="100px" alt="">
    </div>

    <!-- search bar -->
     <div class="d-flex w-25">
         <form class="d-flex align-items-center  search-bar "></form>
         <i class="bi bi-search d-flex align-items-center rounded-start-pill p-2 bg-body-secondary"></i>
         <input type="text" placeholder="Search across your channel " style="outline-width:0;" class="bg-body-secondary rounded-end-pill w-100  border-0">
        </div>
        
        <!-- create section -->
        
        <div class="d-flex gap-3 align-items-center">
         <i class="bi bi-search d-flex align-items-center rounded-start-pill p-2 d-none search-icon"></i>
        <i class="bi  bi-question-circle bg-body-secondary fs-5 d-flex justify-content-center align-items-center" style="clip-path: circle();height: 40px;width: 40px;"></i>
        <i class="bi  bi-bell bg-body-secondary fs-5 d-flex justify-content-center align-items-center" style="clip-path: circle();height: 40px;width: 40px;"></i>
        <button class="btn btn-outline-dark"><i class="bi bi-plus-square px-2"></i>Create</button>
        <div class="bg-body-secondary d-flex align-items-center justify-content-center" style="clip-path: circle();width: 40px;height: 40px;"><i class="bi bi-person fs-4 "></i></div>
    </div>
</div>

</body>
</html>
