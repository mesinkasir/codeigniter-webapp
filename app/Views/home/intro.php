<div class="row ">
<div class="col-md-6 col-12 p-3 p-md-5">
	<div class="p-3 p-md-5">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline"><a href="/"><?php echo $title; ?></a></span>
            <span class="block text-indigo-600 xl:inline"><?php echo $desc; ?></span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
		  <?php echo $content; ?>
          </p>
        <div class="row">
		<div class="col-md-6 p-1">
              <a href="<?php echo $btn1url; ?>" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
			  <?php echo $btn1; ?>
              </a>
            </div>
			  <div class="col-md-6 p-1">
              <a href="<?php echo $btn2url; ?>" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200 md:py-4 md:text-lg md:px-10">
			  <?php echo $btn2; ?>
              </a>
			  </div>
            </div>
        </div>
    </div>       
  <div class="col-md-6 col-12 ">
    <img class="img-fluid h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" 
	src="<?php echo $cover; ?>"
	alt="<?php echo $title; ?>">
  </div>
</div>

<div class="ratio ratio-21x9">
  <iframe src="https://www.youtube.com/embed/<?php echo $cinema; ?>" title="<?php echo $description; ?>" allowfullscreen></iframe>
</div>