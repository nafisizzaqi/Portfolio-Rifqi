<?php 

    include 'koneksi.php';
    $query = "SELECT * FROM users";
    $query_sql = mysqli_query($koneksi, $query);
    $tampil = mysqli_fetch_assoc($query_sql)

?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifki</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black overflow-x-hidden">

    <!-- nav -->
    <section>
        <nav id="navbar" class="bg-transparent dark:bg-gray-900 fixed w-full z-20 top-0 start-0 dark:border-gray-600 transition-colors duration-300">
          <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
              <img id="navbar-logo" src="image/logo.png" class="h-14" alt="Logo">
              <span id="navbar-text" class="self-center text-black text-3xl font-thin whitespace-nowrap dark:text-white mr-80">Kang Design</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse"> 
              <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false"></button>
            </div>
            <div class="ml-96 items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
              <ul id="navbar-links" class="gap-4 flex flex-col p-4 md:p-0 mt-4 font-medium md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li><a href="#home" class="text-black block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">Home</a></li>
                <li><a href="#about" class="text-black block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">About Us</a></li>
                <li><a href="#skill" class="text-black block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">Skill</a></li>
                <li><a href="#project" class="text- block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">My Project</a></li>
                <li><a href="#contact" class="text-black block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700  md:dark:hover:bg-transparent dark:border-gray-700">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

     <!-- hero -->

<?php 
include 'koneksi.php';
$query = "SELECT * FROM users";
$query_sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_assoc($query_sql);
?>


      <section id="home" class="pt-56 bg-white">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="mx-auto relative bottom-20">
                    <img src="image/<?= $tampil['logo']?>" class="w-72" alt="">
                    <h1 class="text-center text-5xl font-thin" ><?= $tampil['name']?> </h1>
                    
                </div>
            </div>
        </div>
            <div class="items-center w-full h-36  bg-black">
                <p class="text-center relative top-2 text-3xl text-white font-mono"><?= $tampil['job']?></p>
            </div>
      </section>

      <!-- about -->
<?php 
include 'koneksi.php';
$query = "SELECT * FROM about_us";
$query_sql = mysqli_query($koneksi, $query);
$tampil = mysqli_fetch_assoc($query_sql);
?>

       <section id="about" class="pt-10 pb-10">
        <div class="container mx-auto text-center">
            <div class="flex flex-wrap items-center">
                <div class="w-full">
                    <div class="w-full text-center mx-56 relative top-40">
                        <h1 class="text-5xl font-bold text-white mb-5"><?= $tampil['title']?></h1>
                        <p class="text-white text-2xl font-semibold text-start w-96 mx-auto"><?= $tampil['description']?></p>
                    </div>
                    <div class="relative bottom-44">
                        <img src="image/<?= $tampil['picture']?>" class="w-72 mx-56 " alt="">
                    </div>
                </div>
            </div>
        </div>
       </section>

       <!-- skil -->
       <?php 
       include 'koneksi.php';
       $skill_query = "SELECT * FROM skill";
       $query_sql = mysqli_query($koneksi, $skill_query);
       $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
       ?>
        <section id="skill" class="pt-20 pb-20">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap">
                    <div class="w-full">
                        <h1 class="text-5xl text-white font-bold relative top-2"><?= $ambildata[0]['title']?></h1>
                    </div>

                    <div class="flex mt-28 mx-auto gap-36">

                    <?php 
                    foreach($ambildata as $tampil) {
                    ?>
                        <div class="text-center">
                            <img src="image/<?= $tampil['picture']?>" class="w-60 rounded-lg" alt="">
                            <p class="text-xl font-semibold text-white mt-6"><?= $tampil['description']?></p>
                        </div>
                        <?php 
                        }
                        ?>
                        
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- project -->
        <?php 
       include 'koneksi.php';
       $project_query = "SELECT * FROM project";
       $query_sql = mysqli_query($koneksi, $project_query);
       $ambildata = mysqli_fetch_all($query_sql, MYSQLI_ASSOC);
       ?>
         <section id="project" class="pt-32 pb-24">
            <div class="container mx-auto text-center">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-5xl text-white font-bold"><?= $ambildata[0]['title']?></h1>
                    </div>

                    <div class="w-full mt-20 grid grid-cols-3 gap-10">
                    <?php 
                    foreach($ambildata as $tampil) { 
                    ?>
                        <div class=" gap-52 mx-auto">
                            <img src="image/<?= $tampil['picture']?>" class="w-44 rounded-xl" alt="">
                            
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                </div>
            </div>
         </section>

         <!-- contact -->
          <section id="contact" class="pt-20 pb-28 bg-white">
            <div class="container ml-20 text-start">
                <div class="flex flex-wrap items-center">
                    <div class="w-full">
                        <h1 class="text-7xl text-black font-bold" style="text-decoration: underline;">Contact</h1>
                    </div>

                    <div class="w-[50rem] h-96 bg-black mx-auto mt-10">
                        

                    <form action="proses.php" method="post" class="max-w-md mx-auto mt-10">

<div class="relative z-0 w-full mb-5 group">
    <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " required />
    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your name</label>
</div>

<div class="relative z-0 w-full mb-5 group">
    <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" placeholder=" " required />
    <label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Your email</label>
</div>

<div class="relative z-0 w-full mb-5 group">
        <input 
            type="tel" 
            name="phone" 
            id="phone" 
            class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 focus:outline-none focus:ring-0 peer" 
            placeholder=" " 
            required
            pattern="[0-9]{10,15}" 
            title="Please enter a valid phone number (10-15 digits)." 
        />
        <label for="phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number</label>
    </div>


<div class="relative z-0 w-full mb-5 group">
    <textarea name="comment" id="comment" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 peer" placeholder=" " required></textarea>
    <label for="comment" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-white peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Comment</label>
</div>

<button name="submit" type="submit" class="border border-spacing-1 border-white text-white bg-black hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-white font-medium text-sm w-full sm:w-auto px-5 py-2.5 text-center mx-auto block">
    Submit
</button>
</form>

  
                    </div>
                </div>
            </div>
          </section>

          <footer class="text-center pt-10 pb-10 bg-black">
            <p class="text-md text-white font-semibold">© 2024 Rifqi Desta M Hak Cipta Dilindungi.</p>
          </footer>

          <script src="script.js"></script>
</body>
</html>